<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Stripe;
use Mail;
use App\Product;
use App\Mail\OrderDetails;

class ShopController extends Controller
{
    public function add(Request $request){
        $product = Product::find($request->product_id);
        $userId = auth()->user()->id; 

        \Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->quantity,
            // 'total' => $product->price * $request->quantity
        ])->associate($product);

        return redirect('cart');
    }

    public function cart(){
        return view('cart');
    }

    public function destroy($id){
        \Cart::remove($id);
        return redirect(route('cart'));
    }

    public function update($id, Request $request){
      \Cart::update($id , [
          'quantity' => [
                'relative' => false,
                'value' => $request->quantity]
          ]);
        return redirect()->back();

    }

    public function checkout(){
        return view('checkout');
    }

    public function store(Request $request){

        $charge = Stripe::charges()->create([
            'amount'=> Cart::getTotal(),
            'currency' => 'INR',
            'source' => $request->stripeToken,
            'description' => 'Order'
        ]);
        Cart::clear();
        $emailId = auth()->user()->email; 
        Mail::to($emailId)->send(new OrderDetails);
        return redirect()->route('thanks');

    }

    public function thanks(){
        return view('thanks');
    }
}
    
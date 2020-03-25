<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
 
    public function index()
    {
        if(Category::all()->count() == 0){
            session()->flash('success', 'Add categories to register products..');
            return redirect(route('categories.create'));
        }
        return view('products.index', [
            'products' => Product::all()
        ]);
    }

    public function create()
    {
        return view('products.create')
        ->with('categories', Category::all());
    }


    public function store(CreateProductRequest $request)
    {
        $image = $request->image->store('products');
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $image,
            'description' => $request->description,
            'category_id' => $request->category_id
        ]);
        session()->flash('success', 'New Product added successfully!!');
        return redirect(route('products.index'));
    }


    public function show(Product $product)
    {
        return view('products.show')->with('singleProduct', $product)
        ->with('products', Product::all());
    }

  
    public function edit(Product $product)
    {
        return view('products.create')
        ->with('product', $product)
        ->with('categories' , Category::all());
    }


    public function update(UpdateProductRequest $request, Product $product)
    {
        if($request->hasFile('image')){
            Storage::delete($product->image);
            $image = $request->image->store('products');
            $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'image' => $image,
                'category' => $request->category
            ]);
        } else{
            $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'category' => $request->category
            ]);

            if($request->category){
                $product->category()->sync($request->category);
            }
        }
        return redirect()->route('products.index');
    }

 
    public function destroy(Product $product)
    {
        $product->delete();
        session()->flash('success', 'Product deleted successfully!!');
        return redirect(route('products.index'));
    }
}

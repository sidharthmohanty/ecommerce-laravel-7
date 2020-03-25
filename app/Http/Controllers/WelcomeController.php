<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\User;

class WelcomeController extends Controller
{
    public function index(){
        return view('welcome')
        ->with('categories' , Category::all())
        ->with('products', Product::all())
        ->with('users', User::all());
    }
}

<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'WelcomeController@index')->name('home');

Auth::routes();



Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::middleware(['auth'])->group(function(){
    Route::resource('products', 'ProductsController');
    Route::resource('categories', 'CategoriesController');
    Route::post('/cart/add', 'shopController@add')->name('add-cart');
    Route::get('/cart', 'shopController@cart')->name('cart');
    Route::delete('/cart/{id}/remove', 'shopController@destroy')->name('remove-cart');
    Route::put('/cart/update/{id}', 'shopController@update')->name('cart-update');
    Route::get('/checkout', 'shopController@checkout')->name('checkout');
    Route::post('/checkout', 'shopController@store')->name('store');
    Route::get('/thanks', 'shopController@thanks')->name('thanks');

});
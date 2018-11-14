<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('{path}', function () {
//     return view('index');
// })->where('path', '(.*)');

// Route::get('password/reset/{token}', function () {
//     return view('index');
// })->name('password.reset');






//Route::view('/site/category', 'category')->name('category');

Route::view('/site/brand/{id}', 'brand')->name('brand');

Route::view('/site/product/{id}', 'product')->name('product');

Route::view('/site/home', 'home')->name('home');

// Route::get('/site/home', ['as'=>'home','uses'=>'BrandController@getBrandWithProducts']);

Route::view('/site/cart', 'cart')->name('cart');

Route::view('/site/checkout', 'checkout')->name('checkout');

Route::view('/site/about-us', 'about')->name('about');

Route::view('/site/contact', 'contact')->name('contact');

Route::view('/site/category/{id}', 'category')->name('category');

Route::view('/site/sub-category/{id}', 'subCategory')->name('sub-category');

Route::view('/site/search/{term}', 'search')->name('search');

Route::view('/site/authentication', 'authentication')->name('authentication');

Route::view('/site/invoice/{id}', 'invoice')->name('invoice');

Route::view('/site/dealer', 'dealer')->name('dealer');

Route::view('/site/quotation', 'quotation')->name('quotation');

Route::view('/site/pricelist', 'pricelist')->name('pricelist');

Route::get('{any}', function () {
    return view('index');
})->where('any', '.*');
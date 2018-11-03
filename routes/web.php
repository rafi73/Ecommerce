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






Route::view('/site/category', 'category')->name('category');

Route::view('/site/product', 'product')->name('product');

Route::view('/site/home', 'home')->name('home');

Route::get('{any}', function () {
    return view('index');
})->where('any', '.*');
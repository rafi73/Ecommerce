<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::group(['middleware' => 'auth:api'], function () {
//     Route::post('logout', 'Auth\LoginController@logout');

//     Route::get('/user', function (Request $request) {
//         return $request->user();
//     });

//     Route::patch('settings/profile', 'Settings\UpdateProfile');
//     Route::patch('settings/password', 'Settings\UpdatePassword');
// });

// Route::group(['middleware' => 'guest:api'], function () {
//     Route::post('login', 'Auth\LoginController@login');
//     Route::post('register', 'Auth\RegisterController@register');
//     Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
//     Route::post('password/reset', 'Auth\ResetPasswordController@reset');
// });



Route::group(['middleware' => 'api','prefix' => 'auth'], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::get('logout', 'AuthController@logout');
    Route::get('refresh', 'AuthController@refresh');
    Route::get('me', 'AuthController@me');
});

Route::group(['middleware' => 'jwt.auth'], function ($router) {

    # 1.1 category routes
    // List category
    Route::get('categorys', 'CategoryController@index');
    // List single category
    Route::get('category/{id}', 'CategoryController@show');
    // Create new category
    Route::post('category', 'CategoryController@store');
    // Update category
    Route::put('category', 'CategoryController@store');
    // Delete category
    Route::delete('category/{id}', 'CategoryController@destroy');
});
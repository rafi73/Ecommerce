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
    Route::get('categories', 'CategoryController@index');
    // List single category
    Route::get('category/{id}', 'CategoryController@show');
    // Create new category
    Route::post('category', 'CategoryController@store');
    // Update category
    Route::put('category', 'CategoryController@store');
    // Delete category
    Route::delete('category/{id}', 'CategoryController@destroy');

     # 1.1 sub-category routes
    // List sub-category
    Route::get('sub-categories', 'SubCategoryController@index');
    // List single sub-category
    Route::get('sub-category/{id}', 'SubCategoryController@show');
    // Create new sub-category
    Route::post('sub-category', 'SubCategoryController@store');
    // Update sub-category
    Route::put('sub-category', 'SubCategoryController@store');
    // Delete sub-category
    Route::delete('sub-category/{id}', 'SubCategoryController@destroy');

    # 1.1 specification routes
    // List specification
    Route::get('specifications', 'SpecificationController@index');
    // List single specification
    Route::get('specification/{id}', 'SpecificationController@show');
    // Create new specification
    Route::post('specification', 'SpecificationController@store');
    // Update specification
    Route::put('specification', 'SpecificationController@store');
    // Delete specification
    Route::delete('specification/{id}', 'SpecificationController@destroy');

     # 1.1 specification routes
    // List specification
    Route::get('category-wise-specifications', 'CategoryWiseSpecificationController@index');
    // List single specification
    Route::get('category-wise-specification/{id}', 'CategoryWiseSpecificationController@show');
    // Create new specification
    Route::post('category-wise-specification', 'CategoryWiseSpecificationController@store');
    // Update specification
    Route::put('category-wise-specification', 'CategoryWiseSpecificationController@store');
    // Delete specification
    Route::delete('category-wise-specification/{id}', 'CategoryWiseSpecificationController@destroy');
    // List single specification
    Route::get('category-wise-specification/{id}/category', 'CategoryWiseSpecificationController@getCategoryWiseSpecification');


    # 1.1 brand routes
    // List brand
    Route::get('brands', 'BrandController@index');
    // List single brand
    Route::get('brand/{id}', 'BrandController@show');
    // Create new brand
    Route::post('brand', 'BrandController@store');
    // Update brand
    Route::put('brand', 'BrandController@store');
    // Delete brand
    Route::delete('brand/{id}', 'BrandController@destroy');
});

Route::post('register', 'AuthController@register');
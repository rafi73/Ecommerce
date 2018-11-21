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
     // List single sub-category
    Route::get('sub-category/{id}/category', 'SubCategoryController@getByCategory');

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
    Route::get('category-wise-specification-joint/{id}/category', 'CategoryWiseSpecificationController@getCategoryWiseSpecificationJoint');
    // List single specification
    Route::get('category-wise-specification/{id}/category', 'CategoryWiseSpecificationController@getCategoryWiseSpecification');

    # 1.1 specification routes
    // List specification
    Route::get('product-wise-specifications', 'ProductWiseSpecificationController@index');
    // List single specification
    Route::get('product-wise-specification/{id}', 'ProductWiseSpecificationController@show');
    // Create new specification
    Route::post('product-wise-specification', 'ProductWiseSpecificationController@store');
    // Update specification
    Route::put('product-wise-specification', 'ProductWiseSpecificationController@store');
    // Delete specification
    Route::delete('product-wise-specification/{id}', 'ProductWiseSpecificationController@destroy');
    // List single specification
    Route::get('product-wise-specification/{id}/product', 'ProductWiseSpecificationController@getProductWiseSpecification');


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

     # 1.1 product routes
    // List product
    Route::get('products', 'ProductController@index');
    // List single product
    Route::get('product/{id}', 'ProductController@show');
    // Create new product
    Route::post('product', 'ProductController@store');
    // Update product
    Route::put('product', 'ProductController@store');
    // Delete product
    Route::delete('product/{id}', 'ProductController@destroy');
    // List group-information with parameters
    Route::post('price-list-file', 'PriceListController@storeUploadData');

    Route::get('orders', 'OrderController@index');

    # 1.1 quote-request routes
    // List quote-request
    Route::get('quote-requests', 'QuoteRequestController@index');
    // List single quote-request
    Route::get('quote-request/{id}', 'QuoteRequestController@show');
    
    // Update quote-request
    Route::put('quote-request', 'QuoteRequestController@store');
    // Delete quote-request
    Route::delete('quote-request/{id}', 'QuoteRequestController@destroy');
});

Route::post('register', 'AuthController@register');

// List category
Route::get('frontend-brands', 'BrandController@getBrandForCategoryFrontend');

// List category
Route::get('frontend-products', 'ProductController@getProductFrontend');

// List single product
Route::get('frontend-product/{id}', 'ProductController@show');
// List category
Route::get('frontend-brands', 'BrandController@getBrands');

// List category
Route::get('frontend-categories', 'CategoryController@getCategoriesFrontend');

// List single product
Route::get('frontend-brand/{id}', 'BrandController@show');

// List category
Route::get('frontend-category-wise-products/{id}', 'ProductController@getProductsByCategory');

// List category
Route::get('frontend-sub-category-wise-products/{id}', 'ProductController@getProductsByCategory');

// List category
Route::get('frontend-search-products/{term}', 'ProductController@getSearchedProductFrontend');

Route::post('customer-register', 'CustomerController@store');

Route::post('customer-login', 'CustomerController@login');

Route::post('place-order', 'OrderController@store');

// List single product
Route::get('frontend-order/{id}', 'OrderController@show');


Route::post('dealer-register', 'CustomerController@registerDealer');

Route::post('dealer-login', 'CustomerController@loginDealer');

// Create new quote-request
Route::post('quote-request', 'QuoteRequestController@store');

// Download attachments
Route::get('price-list/download', 'PriceListController@downloadPriceList');
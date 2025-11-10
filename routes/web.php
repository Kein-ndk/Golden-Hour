<?php

use Illuminate\Support\Facades\Route;


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
Route::get('/', 'HomePageController@index')->name('home.index');


Route::get('/profile', 'AuthController@customerDashboard')->name('customer.dashboard')->middleware('auth.customer');


Route::get('/signup', 'RegistrationController@showForm')->name('signup');
Route::post('/register', 'RegistrationController@register')->name('register.submit');

Route::get('/login', 'AuthController@showLoginForm')->name('login.form');
Route::post('/login', 'AuthController@login')->name('login.submit');

Route::get('/logout', 'AuthController@logout')->name('logout');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
    Route::get('/', function () {
        return view('admin.admin');
    })->name('admin.admin')->middleware('auth.admin');

    Route::get('order', 'OrderController@index')->name('admin.pages.order');
    Route::get('product/create', 'ProductsController@create')->name('product.create');
    Route::post('product/store', 'ProductsController@store')->name('product.store');
    Route::post('product/delete/{id}', 'ProductsController@delete')->name('product.delete');
    Route::get('product/edit/{id}', 'ProductsController@edit')->name('product.edit');
    Route::post('product/update/{id}', 'ProductsController@update')->name('product.update');
    Route::get('product', function () {
        return view('admin.pages.addProduct');
    })->name('admin.pages.addProduct');

    Route::get('/listproduct', 'ListProductsController@showproduct')->name('admin.pages.ListProducts');
    Route::get('/addproduct', 'CategoryController@listcate')->name('admin.pages.addProduct');
    Route::get('product/edit', 'ProductsController@edit')->name('admin.pages.EditProducts');
});



Route::get('cart', 'CartController@Cart')->name('cart');
Route::get('add-to-cart/{id}', 'CartController@addCart')->name('addCart');
Route::patch('update-cart', 'CartController@updateCart')->name('updateCart');
Route::delete('delete-cart', 'CartController@deleteCart')->name('deleteCart');


Route::get('/checkout', 'CartController@checkout')->name('checkout');
Route::post('/checkout/place', 'CartController@placeOrder')->name('checkout.place')->middleware('auth.customer');

Route::get('product/{slug}', 'productDetailController@productDetail')->name('productDetail');

Route::get('/category/{slug}', 'CategoryController@showCategory')->name('showCategory');

//session
Route::get('/view-session', 'SessionController@viewSession')->name('view.session');



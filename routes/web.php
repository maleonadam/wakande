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

Route::get('/', 'MealController@index');
Route::get('/cart', 'MealController@goToCart');
Route::get('/add-to-cart/{id}', 'MealController@addToCart');
Route::get('/remove-from-cart/{meal}', 'MealController@removeFromCart');
Route::get('/checkout', 'MealController@goToCheckout');
Route::post('/checkout', 'MealController@postCheckout');
Route::get('/thankyou', 'MealController@orderConfirm');
Route::get('/admin', 'MealController@getUserOrders');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

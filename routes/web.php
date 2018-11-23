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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/wishlists', 'WishlistController@index');
Route::post('/wishlists', 'WishlistController@create');
Route::post('delete', 'WishlistController@delete');
Route::post('update', 'WishlistController@update');
Route::get('/wishlists/{wishlist}/edit', 'WishlistController@edit');

Route::get('list', 'ListController@index');
Route::post('/wishlists/{wishlist}/edit', 'ListController@store');
Route::post('delete', 'ListController@delete');
Route::post('update', 'ListController@update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

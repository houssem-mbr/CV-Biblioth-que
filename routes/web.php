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

Route::get('articles', 'ArController@index');
Route::get('articles/create', 'ArController@create');
Route::post('articles', 'ArController@store');
Route::get('articles/{id}/edit', 'ArController@edit');
Route::put('articles/{id}', 'ArController@update');
Route::delete('articles/{id}', 'ArController@destroy');
Route::get('articles/{id}/show', 'ArController@show');

Route::get('category/categoryAdd', 'ArController@createCategory');
Route::post('category/categoryAdd', 'ArController@storeCategory');

Route::get('category/{id}/showCategory', 'ArController@showCategory');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'GuestController@showArticlesGuest');
Route::get('//{id}/showArticleFront', 'GuestController@showArticleFront');

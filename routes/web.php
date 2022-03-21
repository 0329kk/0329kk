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

Route::resource('products', 'ProductController');

//Route::get('/products', 'ProductController@index')->name('product.list');
//Route::get('/product/new', 'ProductController@create')->name('product.new');
//Route::post('/product', 'ProductController@store')->name('product.store');
//Route::get('/product/edit/{id}', 'ProductController@edit')->name('product.edit');
//Route::post('/product/update/{id}', 'ProductController@update')->name('product.update');
//
//Route::get('/product/{id}', 'ProductController@show')->name('product.detail');
//Route::delete('/product/{id}', 'ProductController@destroy')->name('product.destroy');



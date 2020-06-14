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

Route::get('/', function () {
    return view('index');
});


Route::prefix('/products')->group(function () {
    Route::get('/', 'ProductController@index');
    Route::post('/', 'ProductController@store');
    Route::get('/new', 'ProductController@create');
    Route::get('/edit/{id}', 'ProductController@edit');
    Route::post('/edit/{id}', 'ProductController@update');
    Route::get('/delete/{id}', 'ProductController@destroy');
});

Route::prefix('/categories')->group(function () {
    Route::get('/', 'CategoryController@index');
    Route::post('/', 'CategoryController@store');
    Route::get('/new', 'CategoryController@create');
    Route::get('/edit/{id}', 'CategoryController@edit');
    Route::post('/edit/{id}', 'CategoryController@update');
    Route::get('/delete/{id}', 'CategoryController@destroy');
});

Route::prefix('/customers')->group(function () {
    Route::get('/', 'CustomerController@index');
    Route::get('/new', 'CustomerController@create');
    Route::post('/', 'CustomerController@store');
});

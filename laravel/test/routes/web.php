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
    return view('welcome');
});


Route::get('products', 'MyController@products');
Route::get('name', 'MyController@getName');
Route::get('age', 'MyController@getAge');
Route::get('multiply/{n1}/{n2}', 'MyController@multiply');

Route::resource('client', 'ClientController');
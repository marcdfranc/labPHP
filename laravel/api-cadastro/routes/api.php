<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/categories', 'CategoryController@indexAPI');

Route::prefix('/products')->group(function () {
    Route::get('/', 'ProductController@index');
    Route::post('/', 'ProductController@store');
    Route::delete('/{id}', 'ProductController@destroy');
    Route::patch('/{id}', 'ProductController@update');
    Route::get('/{id}', 'ProductController@edit');
});

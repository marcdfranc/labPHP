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

Route::get('/', 'PostController@index');
//Route::match(['post', 'options'], '/', 'PostController@store');
Route::post('/', 'PostController@store');
Route::delete('/{id}', 'PostController@destroy');
Route::get('/like/{id}', 'PostController@like');

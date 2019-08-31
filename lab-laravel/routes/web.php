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

/* Route::get('/', function () {
    return view('welcome');
});
 */
//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=> ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('', 'AdminController@index')->name('admin.home');
    Route::get('balance', 'BalanceController@index')->name('admin.balance');
    
    Route::get('balance/deposit', 'BalanceController@deposit')->name('admin.balance.deposit');
    Route::post('balance/deposit', 'BalanceController@store')->name('admin.balance.deposit.store');
    
    Route::get('balance/drawn', 'BalanceController@drawn')->name('admin.balance.drawn');
    Route::post('balance/drawn', 'BalanceController@drawnStore')->name('admin.balance.drawn.store');
    
    Route::get('balance/transfer', 'BalanceController@transfer')->name('admin.balance.fransfer');
    Route::post('balance/transfer_confirm', 'BalanceController@transferConfirm')->name('admin.balance.transfer.confirm');
    Route::post('balance/transfer_store', 'BalanceController@transferStore')->name('admin.balance.transfer.store');
  
});

//Route::get('/admin', 'AdminController')->name('admin.home');

Route::get('/', 'Site\SiteController@index');

Auth::routes();


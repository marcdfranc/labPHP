<?php

use App\Address;
use App\Supplier;
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

Route::get('/suppliers', function () {
    $supplier = Supplier::all();
    foreach ($supplier as $s) {
        echo "<p>id: " . $s->id . "</p>";
        echo "<p>name: " . $s->name . "</p>";
        echo "<p>phone: " . $s->phone . "</p>";

        echo "<p>street: " . $s->address->street . "</p>";
        echo "<p>number: " . $s->address->number . "</p>";
        echo "<p>town: " . $s->address->town . "</p>";
        echo "<p>city: " . $s->address->city . "</p>";

        echo "<hr />";
    }
});

Route::get('/addresses', function () {
    $adresses = Address::all();

    foreach ($adresses as $a) {
        echo "<p>Supplier: " . $a->supplier->name . "</p>";
        echo "<p>supplier phone: " . $a->supplier->phone . "</p>";

        echo "<p>street: " . $a->street . "</p>";
        echo "<p>number: " . $a->number . "</p>";
        echo "<p>town: " . $a->town . "</p>";
        echo "<p>city: " . $a->city . "</p>";

        echo "<hr />";
    }
});

Route::get('/suppliers/new', function () {
    $s = new Supplier();
    $s->name = "Nico Poco";
    $s->phone = "55531 333377";
    $s->save();

    $a = new Address();
    $a->street = "Junction Jones Road";
    $a->number = 77;
    $a->town = "Hammers Ville";
    $a->city = "Birminghan";
    $a->postCode = "BR14FE";

    $s->address()->save($a);
});

Route::get('/suppliers/json', function () {
    // $suppliers = Supplier::all(); // Lazzy load 
    $suppliers = Supplier::with('address')->get();
    return $suppliers->toJson();
});

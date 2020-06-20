<?php

use App\Category;
use App\Product;
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


Route::get('/categories', function () {
    $categories = Category::all();

    if (count($categories) == 0) {
        echo '<p>Categories not found!</p>';
    } else {
        foreach ($categories as $cat) {
            echo '<p>' . $cat->id . ': ' . $cat->name . '</p>';
            echo '<ul>';

            foreach ($cat->products as $prod) {
                echo '<li>' . $prod->id . ': ' . $prod->name . '</li>';
            }

            echo '</ul>';
        }
    }
});


Route::get('/products', function () {
    $products = Product::all();

    //var_dump($products);

    if (count($products) == 0) {
        echo '<p>Products not found!</p>';
    } else {
        echo '<table><thead><tr><td>Name</td><td>stock</td><td>Price</td><td>Category</td></tr></thead><tbody>';
        foreach ($products as $prod) {
            echo '<tr>';
            echo '<td>' . $prod->name . '</td>';
            echo '<td>' . $prod->stock . '</td>';
            echo '<td>' . $prod->price . '</td>';
            echo '<td>' . $prod->category->name . '</td>';
            echo '</tr>';
        }
        echo '</tbody></table>';
    }
});

Route::get('/categories/json', function () {
    $products = Category::with('products')->get();

    return $products->toJson();
});

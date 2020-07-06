<?php

use App\Category;
use App\Product;
use App\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();
        $categories = Category::all()->pluck('id')->toArray();

        foreach ($products as $product) {
            echo $product->id;

            ProductCategory::create([
                'product_id' => $product->id,
                'category_id' => $categories[rand(1, 200)]
            ]);
        }
    }
}

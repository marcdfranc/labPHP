<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            "name" => "Polo T-Shirt",
            "price" => 100,
            "stock" => 4,
            "category_id" => 1
        ]);
        DB::table('products')->insert([
            "name" => "Jeans",
            "price" => 120,
            "stock" => 2,
            "category_id" => 1
        ]);
        DB::table('products')->insert([
            "name" => "Social Shirt",
            "price" => 80,
            "stock" => 1,
            "category_id" => 1
        ]);
        DB::table('products')->insert([
            "name" => "PC Games",
            "price" => 100,
            "stock" => 10,
            "category_id" => 2
        ]);
        DB::table('products')->insert([
            "name" => "Printer HP ",
            "price" => 120,
            "stock" => 3,
            "category_id" => 6
        ]);
        DB::table('products')->insert([
            "name" => "Mouse Eagle",
            "price" => 32,
            "stock" => 100,
            "category_id" => 6
        ]);
        DB::table('products')->insert([
            "name" => "Douce Cabana",
            "price" => 1,
            "stock" => 1000,
            "category_id" => 3
        ]);
        DB::table('products')->insert([
            "name" => "King bed",
            "price" => 327.52,
            "stock" => 2,
            "category_id" => 4
        ]);
        DB::table('products')->insert([
            "name" => "Table with 4 chairs",
            "price" => 138.58,
            "stock" => 3,
            "category_id" => 4
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(["name" => "Clothes"]);
        DB::table('categories')->insert(["name" => "Eletronics"]);
        DB::table('categories')->insert(["name" => "Helth"]);
        DB::table('categories')->insert(["name" => "Forniture"]);
        DB::table('categories')->insert(["name" => "Food"]);
        DB::table('categories')->insert(["name" => "Computers && Accessories"]);
    }
}

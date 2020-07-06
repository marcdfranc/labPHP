<?php

use App\Product;
use Faker\Factory;
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
        $faker = Factory::create();
        for ($i = 0; $i < 1000; $i++) {
            Product::create([
                'name' => $faker->word(),
                'price' => $faker->randomFloat(2, 1, 1000)
            ]);
        }
    }
}

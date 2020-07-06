<?php

use App\Category;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 200; $i++) {
            Category::create([
                'name' => $faker->word()
            ]);
        }
    }
}

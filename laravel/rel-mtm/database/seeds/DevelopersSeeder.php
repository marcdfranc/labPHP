<?php

use Illuminate\Database\Seeder;

class DevelopersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('developers')->insert([
            "name" => "Bernardo Silva",
            "position" => 'Midel Developer'
        ]);
        DB::table('developers')->insert([
            "name" => "Carlos Arnaldo",
            "position" => 'Senior Developer'
        ]);
        DB::table('developers')->insert([
            "name" => "Paulo Simas",
            "position" => 'Jr. Developer'
        ]);
    }
}

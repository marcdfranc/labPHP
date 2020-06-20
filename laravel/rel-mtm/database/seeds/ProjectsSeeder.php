<?php

use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            "name" => "Resources Allocations System",
            "stimate" => 200
        ]);
        DB::table('projects')->insert([
            "name" => "Library System",
            "stimate" => 1000
        ]);
        DB::table('projects')->insert([
            "name" => "Sales System",
            "stimate" => 2000
        ]);
        DB::table('projects')->insert([
            "name" => "New System",
            "stimate" => 5000
        ]);
    }
}

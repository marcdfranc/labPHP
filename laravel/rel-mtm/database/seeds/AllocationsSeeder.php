<?php

use Illuminate\Database\Seeder;

class AllocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('allocations')->insert([
            "project_id" => 1,
            "developer_id" => 1,
            "hours_per_week" => 11
        ]);
        DB::table('allocations')->insert([
            "project_id" => 1,
            "developer_id" => 2,
            "hours_per_week" => 13
        ]);
        DB::table('allocations')->insert([
            "project_id" => 2,
            "developer_id" => 2,
            "hours_per_week" => 14
        ]);
        DB::table('allocations')->insert([
            "project_id" => 2,
            "developer_id" => 3,
            "hours_per_week" => 15
        ]);
        DB::table('allocations')->insert([
            "project_id" => 3,
            "developer_id" => 1,
            "hours_per_week" => 16
        ]);
        DB::table('allocations')->insert([
            "project_id" => 3,
            "developer_id" => 2,
            "hours_per_week" => 17
        ]);
        DB::table('allocations')->insert([
            "project_id" => 3,
            "developer_id" => 3,
            "hours_per_week" => 5
        ]);
    }
}

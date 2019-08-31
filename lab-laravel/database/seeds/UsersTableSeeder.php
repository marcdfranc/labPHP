<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Marcelo Francisco',
            'email' => 'marcelo.francisco@webtravessa.com.br',
            'password' => bcrypt('webweb')
        ]);

        User::create([
            'name' => 'Marcelo franc',
            'email' => 'marcdfranc@gmail.com',
            'password' => bcrypt('adminadmin')
        ]);
    }
}

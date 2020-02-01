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
      User::insert([
            "name" => 'admin',
            "password" => bcrypt('12345678'),
            "email" => 'admin@essencials.com',
            "role" => 1,
      ]);
      
      User::insert([
        "name" => 'admin2',
        "password" => bcrypt('12345678'),
        "email" => 'admin2@essencials.com',
        "role" => 1,
      ]);
    }
}

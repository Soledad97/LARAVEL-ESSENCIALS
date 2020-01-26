<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles=array(['name'=>'User']);
        foreach($roles as $role);
        {
          Role::insert($role);
        }
    }
}

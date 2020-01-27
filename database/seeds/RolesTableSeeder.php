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
<<<<<<< HEAD
        $roles=array(['name'=>'User']);
        foreach($roles as $role);
        {
          Role::insert($role);
        }
    }
}
=======
        $roles = array(['name' => 'Admin'], ['name' => 'User']);
        
        foreach($roles as $role)
        {
            Role::insert($role);
        }
  
    }
}

>>>>>>> 6f6f5b5dcb794653d33bf633f1ce22943a0df750

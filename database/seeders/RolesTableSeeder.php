<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [

            [
                'name' => 'user',
            ],
            
            [
              'name' => 'admin'
            ],

            [
               'name' => 'reception'
            ],
            
            [
                'name'=>'specialist',
            
            ],
        ];
    
        foreach ($roles as $key => $role) {
            Role::create($role);
        }
    }
    
}

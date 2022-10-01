<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            
            [
               'firstname'=>'Admin',
               'lastname'=>'User',
               'email'=>'admin@example.com',
               'role_id'=>2,
               'password'=> bcrypt('123456'),
            ],
            [
               'firstname'=>'Reception',
               'lastname'=>'User',
               'email'=>'reception@example.com',
               'role_id'=> 3,
               'password'=> bcrypt('123456'),
            ],
            
            [
                'firstname'=>'Specialist',
                'lastname'=>'Psychiatrist',
                'email'=>'psychiatrist@example.com',
                'role_id'=>4,
                'password'=> bcrypt('123456'),
             ],

             [
                'firstname'=>'Specialist',
                'lastname'=>'Doctor',
                'email'=>'doctor@example.com',
                'role_id'=>4,
                'password'=> bcrypt('123456'),
             ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}

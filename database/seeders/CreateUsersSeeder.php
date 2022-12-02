<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;
use App\Models\MedicalHistory;

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
                'firstname'=>'User',
                'lastname'=>'User',
                'email'=>'user@example.com',
                'role_id'=>1,
                'password'=> bcrypt('123456'),
            ],

            [
               'firstname'=>'Admin',
               'lastname'=>'User',
               'email'=>'admin@example.com',
               'role_id'=>2,
               'password'=> bcrypt('123456'),
            ],
            [
               'firstname'=>'Triage',
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

        $profile = new Profile;
        $profile->user_id = 1;
        $profile->date_of_birth = date('y-m-d');
        $profile->gender = "male";
        $profile->religion = 'Christianity';
        $profile->city = "Minna";
        $profile->state = "Kwara";
        $profile->about = "this is about me";
        $profile->completed = 1;
        $profile->save();

        $medicalHistory = new MedicalHistory;
        $medicalHistory->user_id = 1;
        $medicalHistory->save();


    }
}

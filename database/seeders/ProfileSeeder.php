<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'user_id'=>'3',
            'date_of_birth'=>'1985-10-11',
            'gender'=>'Male',
            'religion'=>'others',
            'city'=>'Abuja',
            'state'=>'Abuja',
            'about'=>'Good guy',
            'completed'=>1,
            
        ]);

        Profile::create([
            'user_id'=>'4',
            'date_of_birth'=>'1985-10-11',
            'gender'=>'Male',
            'religion'=>'others',
            'city'=>'Abuja',
            'state'=>'Abuja',
            'about'=>'Good guy',
            'completed'=>1,
            
        ]);

        Profile::create([
            'user_id'=>'5',
            'date_of_birth'=>'1985-10-11',
            'gender'=>'Male',
            'religion'=>'others',
            'city'=>'Abuja',
            'state'=>'Abuja',
            'about'=>'Good guy',
            'completed'=>1,
            
        ]);
    }
}

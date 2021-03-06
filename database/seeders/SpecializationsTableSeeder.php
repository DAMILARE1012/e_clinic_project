<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Specialization;

class SpecializationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [

            [
                'user_id' => 1,
                'name' => 'Doctor',
            ],

            [
                'user_id' => 1,
                'name' => 'Psychiatrist'
            ],
            
        ];

        foreach($names as $key => $name){
            Specialization::create($name);
        }
    }
}

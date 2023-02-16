<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Specialist;

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
                'name' => 'Doctor',
            ],

            [
                'name' => 'Psychiatrist'
            ],

            [
                'name' => 'Physiotherapist'
            ],
            
        ];

        foreach($names as $key => $name){
            Specialist::create($name);
        }
    }
}

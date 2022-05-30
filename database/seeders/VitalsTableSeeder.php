<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VitalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vitals')->insert([
            'user_id' => 1,
           'temperature' => '100',
           'blood_pressure' => '300'
        ]);
    }
}

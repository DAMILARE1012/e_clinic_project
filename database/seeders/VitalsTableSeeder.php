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
            'device_id' => 'vimonet123',
            'temperature' => '100',
            'blood_pressure' => '300',
            'heart_rate' => '60',
            'battery_level' => '65',
        ]);
    }
}

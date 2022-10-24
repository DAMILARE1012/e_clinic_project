<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class chatRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chat_rooms')->insert([
            'name' => 'General',
            'appointment_id' => 1
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'Tech talk',
            'appointment_id' => 2
        ]);
    }
}

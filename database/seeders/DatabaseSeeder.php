<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([            
            VitalsTableSeeder::class,
            CreateUsersSeeder::class,
            RolesTableSeeder::class,
            SpecializationsTableSeeder::class,
            QuestionnaireTableSeeder::class,
            HealthTipSeeder::class,
            // ChatRoomSeeder::class,
            // ComplaintsSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}

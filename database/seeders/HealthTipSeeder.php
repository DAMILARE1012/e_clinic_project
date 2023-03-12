<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HealthTip;

class HealthTipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tips = [
            [
                'tips' => 'Get enough sleep: Getting sufficient sleep is essential for good mental health. Aim for 7-8 hours of sleep per night.',   
            ],

            [
                'tips' => 'Stay physically active: Regular exercise can help to improve mood and reduce symptoms of anxiety and depression.'
            ],

            [
                'tips' => 'Eat a balanced diet: A healthy diet can help to support good mental health. Make sure to eat a variety of fruits, vegetables, whole grains, lean protein, and healthy fats.'
            ],

            [
                'tips' => 'Stay connected: Social support is crucial for good mental health. Make time to connect with friends and family, and participate in activities that you enjoy.'
            ],

            [
                'tips' => 'Manage stress: Stress is a natural part of life, but it\'s important to find healthy ways to manage it. Try practicing relaxation techniques such as deep breathing, meditation, or yoga.'
            ],

            [
                'tips' => 'Seek professional help: If you are struggling with your mental health, don\'t hesitate to reach out for professional help. A psychologist or other mental health professional can help you to develop coping strategies and work through any issues you may be facing.'
            ]
        ];

        foreach($tips as $tip){
            HealthTip::create($tip);
        }
    }
}

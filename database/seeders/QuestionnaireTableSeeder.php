<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Questionnaire;

class QuestionnaireTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [

            [
                'category' => 'psychiatrist',
                'question' => 'depression',
                
            ],
            
            [
                'category' => 'psychiatrist',
              'question' => 'stress/anxiety'
            ],

            [
                'category' => 'psychiatrist',
               'question' => 'coping with addictions'
            ],
            
            [
                'category' => 'psychiatrist',
                'question'=>'LGBTQ related issues',
            
            ],

            [
                'category' => 'psychiatrist',
                'question'=>'relationship issues',
            ],

            [
                'category' => 'psychiatrist',
                'question'=>'family conflicts',
            ],

            [
                'category' => 'psychiatrist',
                'question'=>'trauma/abuse',
            ],

            [
                'category' => 'psychiatrist',
                'question'=>'coping with grief/loss',
            ],

            [
                'category' => 'psychiatrist',
                'question'=>'sexuality/intimacy issues',
            ],

            [
                'category' => 'psychiatrist',
                'question'=>'eating disorder',
            ],

            [
                'category' => 'psychiatrist',
                'question'=>'sleeping disorder',
            ],

            [
                'category' => 'psychiatrist',
                'question'=>'parenting issues',
            ],

            [
                'category' => 'psychiatrist',
                'question'=>'motivation, self-esteem & confidence',
            ],

            [
                'category' => 'psychiatrist',
                'question'=>'anger management',
            ],

            [
                'category' => 'psychiatrist',
                'question'=>'career difficulties',
            ],

            [
                'category' => 'psychiatrist',
                'question'=>'coping with life changes',
            ],

            [
                'category' => 'psychiatrist',
                'question'=>'study related issues',
            ],

        ];

        foreach ($questions as $key => $question) {
            Questionnaire::create($question);
        }
    }
}

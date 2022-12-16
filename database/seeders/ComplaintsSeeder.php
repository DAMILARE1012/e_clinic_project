<?php

namespace Database\Seeders;
use App\Models\Complaint;
use App\Models\ComplaintQuestionnaire;

use Illuminate\Database\Seeder;

class ComplaintsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $complaints = [
            
            [
                'user_id' => 1,
                'description' => 'I have headache',
                'specialization_id' => 2,
            ],

            [
                'user_id' => 1,
                'description' => 'I have stomach ache',
                'specialization_id' => 2,
            ],
            
        ];
        
        $questionnaires = [
            [
                'complaint_id' => 1,
                'questionnaire_id' => 1,

            ],
            
            [
                'complaint_id' => 1,
                'questionnaire_id' => 2,

            ],

            [
                'complaint_id' => 1,
                'questionnaire_id' => 3,

            ],

            [
                'complaint_id' => 2,
                'questionnaire_id' => 1,

            ],

            [
                'complaint_id' => 2,
                'questionnaire_id' => 2,

            ],

        ];

        foreach ($complaints as $key => $complaint) {
            Complaint::create($complaint);
        }

        foreach ($questionnaires as $key => $questionnaire) {
            ComplaintQuestionnaire::create($questionnaire);
        }
    }
}

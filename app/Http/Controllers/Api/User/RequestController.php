<?php

namespace App\Http\Controllers\Api\User;
use App\Models\Complaint;
use App\Models\Questionnaire;
use App\Models\ComplaintQuestionnaire;
use App\Models\Specialist;
use Carbon\Carbon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index($id)
    {
        $complaints = Complaint::where('user_id', $id)->orderBy('created_at', 'desc')->get();
        if($complaints->count() > 0){
            return response([
                'complaints' => '$complaints',
                'status' => true,
            ], 200);
        }
        else{
            return response([
                'message' => 'No complaints made, Kindy make a complaint!',
                'status' => true,
            ]);
        }
    }

    public function formRequirment(){
        $specialist = Specialist::all();
        $questionnaire = Questionnaire::all();
        $complaintQuestionnaire = ComplaintQuestionnaire::all();
            return response([
                'specialist' => $specialist,
                'questionnaire' => $questionnaire,
                'complaintQuestionnaire' => $complaintQuestionnaire,
                'status' => true,
            ], 200);
    }

    public function store(Request $request, $user_id)
    {
        if(Complaint::where('user_id', $user_id)->whereDate('created_at', Carbon::today())->first()){
            return response([
                'message' => 'You already have a pending request!, you are being attended to',
                'status' => true,
            ], 200);
        }
        else{
            $fields = $request->validate([
                'description' => 'required',
                'specialist_id' => 'required'
            ]);
            $complaint = Complaint::create([
                'user_id' => $user_id,
                'description' => $fields['description'],
                'specialist_id' => $fields['specialist_id']
            ]);
                return response([
                    'message' => 'Complaint sent successful, A specialist will be assigned to you soon',
                    'status' => true,
                ],200);
            }
            
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complaint;
use Auth;
use App\Models\Questionnaire;
use App\Models\ComplaintQuestionnaire;

class ComplaintController extends Controller
{
    public function createNewComplaint()
    {
        return view('user.requests.create');
    }

    public function storeNewComplaint(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
        ]);

        Complaint::create([
            'patient_id' => Auth::id(),
            'description' =>  $request->description,
            'chronic_illness' => $request->chronic_illness,
            'past_hospital' => $request->past_hospital,
            'past_surgry' =>  $request->past_surgry,
            'past_B_transfusion' => $request->past_B_transfusion,
            'drug_history' => $request->drug_history,
            'last_menst_period' =>  $request->last_menst_period,
            'no_pregnacy' => $request->no_pregnacy,
            'no_delivery' => $request->no_delivery,
            'no_children' => $request->no_children,

        ]);

        return redirect()->route('user.dashboard')->with('message', 'Complaint sent successful, A specialist will be assigned to you soon');

    }

    public function allComplaints()
    {
        $complaints = Complaint::all();
        return view('user.requests.index', compact('complaints'));
    }

    public function getPsyQuestions()
    {
        $questions = Questionnaire::where('category', 'psychiatrist')->get();
        return response($questions, 200);
    }

    public function submitRequest(Request $request)
    {


        $validates = $this->validate($request, [
            'questionnaires' => 'required',
            'specialist' => 'required',
            'description' => 'required',
        ]);

        $complaint = new Complaint;
        $complaint->user_id = $request->user_id;
        $complaint->description = $request->description;
        $complaint->save();

        if($complaint){
            foreach($request->questionnaires as $question){
                $questionnaire = ComplaintQuestionnaire::create([
                    'complaint_id' => $complaint->id,
                    'questionnaire_id' => $question,
                ]);
    
                $questionnaire->save();
    
            }

            return response("data-saved", 201);
        }else{
            return response("Error creating complain", 400);
        }


    }


    
}

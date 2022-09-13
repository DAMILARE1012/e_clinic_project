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

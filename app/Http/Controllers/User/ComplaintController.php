<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complaint;
use Auth;
use App\Models\Questionnaire;
use App\Models\ComplaintQuestionnaire;
use App\Models\Specialization;
use Carbon\Carbon;
use App\Models\Appointment;
use App\Models\ChatRoom;

class ComplaintController extends Controller
{
    public function createNewComplaint()
    {
        $todayRequests = Complaint::where('user_id', Auth::id())->whereDate('created_at', Carbon::today())->first();
        $specializations = Specialization::all();
        if($todayRequests){
            return redirect()->back()->with('message', "You already have a pending request");
        }
        return view('user.requests.create', compact('specializations'));
    }

    // public function storeNewComplaint(Request $request)
    // {
    //     $this->validate($request, [
    //         'description' => 'required',
    //     ]);

    //     Complaint::create([
    //         'patient_id' => Auth::id(),
    //         'description' =>  $request->description,
    //         'chronic_illness' => $request->chronic_illness,
    //         'past_hospital' => $request->past_hospital,
    //         'past_surgry' =>  $request->past_surgry,
    //         'past_B_transfusion' => $request->past_B_transfusion,
    //         'drug_history' => $request->drug_history,
    //         'last_menst_period' =>  $request->last_menst_period,
    //         'no_pregnacy' => $request->no_pregnacy,
    //         'no_delivery' => $request->no_delivery,
    //         'no_children' => $request->no_children,

    //     ]);

    // }

    public function allComplaints()
    {
        $complaints = Complaint::where('user_id', auth()->id())->orderBy('created_at', 'DESC')->get();
        return view('user.requests.index', compact('complaints'));
    }

    public function getPsyQuestions()
    {
        $psyQuestions = Questionnaire::where('category', 'psychiatrist')->get();
        $generalQuestions = Questionnaire::where('category', 'general')->get();

        $questions = [
            'psyQuestions' => $psyQuestions,
            'generalQuestions' => $generalQuestions,
        ];

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
        $complaint->specialization_id = $request->specialist;
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

            \Mail::to(auth()->user()->email)->queue(new \App\Mail\ComplaintRequestMail($complaints));

            return response("data-saved", 201);
        }else{
            return response("Error creating complain", 400);
        }
    }

    public function selectAppointment($id)
    {
        $complaints = Complaint::find($id);
        $appointments = $complaints->appointments;

        return view('user.appointments.select-appointment', compact('appointments'));
    }

    public function confirmAppointment($id)
    {
        $appointment = Appointment::find($id);
        $appointment->selected = 1;
        $appointment->save();

        if($appointment){
            
            $chatRoom = new ChatRoom;
            $chatRoom->appointment_id = $appointment->id;
            $chatRoom->name = $appointment->complaint->user->id.'.'.now()->day.'.'.now()->month.'.'.now()->year;
            $chatRoom->save();
        }
        

        return redirect()->route('user.complaints')->with([
            'message' => 'Appointment time confirmed, please make sure to be online that time, A specialist will attend to you',
        ]);

    }


    
}

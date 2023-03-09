<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complaint;
use Auth;
use App\Models\Questionnaire;
use App\Models\ComplaintQuestionnaire;
use App\Models\Specialist;
use Carbon\Carbon;
use App\Models\Appointment;
use App\Models\ChatRoom;
use Session;
use App\Models\User;

class ComplaintController extends Controller
{
    public function createNewComplaint()
    {
        $todayRequests = Complaint::where('user_id', Auth::id())->whereDate('created_at', Carbon::today())->first();
        $specializations = Specialist::all();
        if($todayRequests){
            return redirect()->back()->with('message', "You already have a pending request");
        }
        return view('user.requests.create', compact('specializations'));
    }

    public function allComplaints()
    {
        $complaints = Complaint::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
        if($complaints->count() > 0){
            return view('user.requests.index', compact('complaints'));
        }else{
            Session::flash('message', 'You have never made a request, please make a request.');
            return redirect()->back();
        }
        
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
        $user = User::where('id', $request->user_id)->first();

        $validates = $this->validate($request, [
            'questionnaires' => 'required',
            'specialist' => 'required',
            'description' => 'required',
        ]);

        $todayRequests = Complaint::where('user_id', Auth::id())->whereDate('created_at', Carbon::today())->first();
        
        if (!$todayRequests) {
            $complaint = new Complaint;
            $complaint->user_id = $request->user_id;
            $complaint->specialist_id = $request->specialist;
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

                \Mail::to($user->email)->queue(new \App\Mail\ComplaintRequestMail($complaint));

                return response("data-saved", 201);
            }else{
                return response("Error creating complain", 400);
            }
        }else{
            $response = [
                'message' => 'User already has a pending complaint',
                'status' => 500,
            ];
            
            return response($response);
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

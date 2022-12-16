<?php

namespace App\Http\Controllers\Specialist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PatientSpecialist;
use App\Models\Complaint;
use App\Models\Appointment;
use \Carbon\Carbon;
use App\Models\Chatroom;


class SpecialistController extends Controller
{
    public function index()
    {
        $thisMonth = Carbon::now();
        $assignedPatients = PatientSpecialist::where('specialist_id', auth()->id())->whereMonth('created_at', $thisMonth->month)->get();
        $auth_id = auth()->id();
        $appointments = $this->getAppointments($auth_id);
        $totalAssigned = PatientSpecialist::where('specialist_id', auth()->id())->get();
        return view('specialist.home', compact('assignedPatients', 'appointments', 'totalAssigned'));
    }

    public function getAssignedPatients()
    {
        $assigned = PatientSpecialist::where('specialist_id', auth()->id())->get();

        return view('specialist.assigned.index', compact('assigned'));
    }

    public function assignedDetail($id)
    {
      
        $complaint = Complaint::find($id);
        return view('specialist.assigned.show', compact('complaint'));
    }

    public function suggestAppointment(Request $request)
    {
        #validate request
        $validated = $this->validate($request, [
            'date_1' => 'required|date|after:yesterday',
            'start_time_1' => 'required',
            'finish_time_1' => 'required|after:start_time_1',
            'date_2' => 'required|date|after:yesterday',
            'start_time_2' => 'required',
            'finish_time_2' => 'required|after:start_time_2',
            'date_3' => 'required|date|after:yesterday',
            'start_time_3' => 'required',
            'finish_time_3' => 'required|after:start_time_3',
        ]);

        $slots = [
            [
                "complaint_id" => $request->complaint_id,
                "date" => $request->date_1,
                "start_time" => $request->start_time_1, 
                "finish_time" => $request->finish_time_1
            ],

            [
                "complaint_id" => $request->complaint_id,
                "date" => $request->date_2,
                "start_time" => $request->start_time_2, 
                "finish_time" => $request->finish_time_2
            ],

            [
                "complaint_id" => $request->complaint_id,
                "date" => $request->date_3,
                "start_time" => $request->start_time_3, 
                "finish_time" => $request->finish_time_3
            ],
        ];

       

        # send email to users
        
        #add request to database
        $appointments = Appointment::insert($slots);

        #return redirect back
        return redirect()->route('specialist.assigned.patients')->with('message', 'Time slot suggestion sent to patient');
        
    }

    public function myAppointments()
    {

        $auth_id = auth()->id();
        $appointments = $this->getAppointments($auth_id);
        $thisMonth = Carbon::now();
       
        $thisMonth->format('F'); // Return month string

        return view('specialist.assigned.appointments', compact('appointments', 'thisMonth'));
    }

    public function getAppointments($auth_id)
    {
        $assigned = PatientSpecialist::where('specialist_id', $auth_id)->get();
        $complaints = [];
        foreach($assigned as $complaint){
            $complaints[] = $complaint->complaints->id;
        }

        $thisMonth = Carbon::now();
       
        $thisMonth->format('F'); // Return month string
        $appointments = Appointment::whereIn('complaint_id', $complaints)->whereMonth('date', $thisMonth->month)->where('selected', 1)->get();
        return $appointments;

    }
}

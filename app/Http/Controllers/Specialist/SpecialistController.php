<?php

namespace App\Http\Controllers\Specialist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PatientSpecialist;
use App\Models\Complaint;
use App\Models\Appointment;

class SpecialistController extends Controller
{
    public function index()
    {
        return view('specialist.home');
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

       

        # send email
        #add request to database
        Appointment::insert($slots);

        dd('success');
        #return redirect back

        return redirect()->route('specialist.assigned.patients')->with('message', 'Time slot suggestion sent to patient');
        
    }
}

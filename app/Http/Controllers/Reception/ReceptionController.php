<?php

namespace App\Http\Controllers\Reception;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complaint;
use App\Models\User;
use App\Models\PatientSpecialist;
use \Carbon\Carbon;

class ReceptionController extends Controller
{
    public function index()
    {
        $complaints = Complaint::all();
        $todayComplaints = Complaint::whereDate('created_at', Carbon::today())->get();
        $pendingComplaints = Complaint::where('assigned',0)->get();
        return view('receptionist.home', compact('complaints','todayComplaints','pendingComplaints'));
    }

    public function specialist()
    {
        $specialists = User::where('role_id', 4)->get();
        return view('receptionist.specialist', compact('specialists'));
    }

    public function complaints()
    {
        $complaints = Complaint::orderBy('created_at', 'DESC')->get();

        return view('receptionist.requests.index', compact('complaints'));
    }

    public function complaintDetail($id)
    {

        $existAssign = PatientSpecialist::where('complaint_id', $id)->first();
        $complaint = Complaint::find($id);
        $specialists = User::where('role_id',4)->get();
        return view('receptionist.requests.show', compact('complaint','existAssign', 'specialists'));
    }

    public function assignSpecialist(Request $request)
    {
        $validated = $this->validate($request, [
            'patient' => 'required',
            'specialist' => 'required',
            'complaint' => 'required'
        ]);


        $existAssign = PatientSpecialist::where('complaint_id', $request->complaint)->first();

        if(!$existAssign){
            $assigned = PatientSpecialist::create([
                'patient_id' => $request->patient,
                'specialist_id' => $request->specialist,
                'complaint_id' => $request->complaint
            ]);

            if ($assigned) {

                $complaint = Complaint::where('id', $assigned->complaint_id)->first();
                $complaint->assigned = 1;
                $complaint->save();

                \Mail::to($assigned->specialist->email)->queue(new \App\Mail\NotifyAssignedSpecialist($complaint, $assigned));
                \Mail::to($complaint->user->email)->queue(new \App\Mail\NotifyAssignedPatient($complaint, $assigned));

                return redirect()->route('reception.complaints')->with('message', 'Patient assigned successfully');
            } else {
                return redirect()->back()->with('message', 'Unable to assign specialist to case, please try again');
            }
        }else{

            return redirect()->back()->with('message', 'Patient already assigned to a specialist!');
        }

    }
}

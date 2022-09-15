<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Specialization;
use App\Models\Profile;
use App\Models\MedicalHistory;
use Carbon;

class ProfileController extends Controller
{
    public function editProfile()
    {
        $role = auth()->user()->role_id;
        $specializations = Specialization::all();
        
        if ($role == 1) {
            return view('user.profiles.edit', compact('specializations'));
        }elseif($role == 3){
            return view('receptionist.profiles.edit', compact('specializations'));
        }elseif($role == 4){
            return view('specialist.profiles.edit', compact('specializations'));
        }
    }

    public function updateProfile(Request $request)
    {
        $dt = new Carbon\Carbon();
        $before = $dt->subYears(13)->format('Y-m-d');
        $before = Carbon\Carbon::parse($before);
        $before = $before->diffForHumans();

        $this->validate($request, [
            'date_of_birth' => 'required|before:'.$before,
            'gender' => 'required|string',
            'religion' => 'required|string',
            'specialization' => 'string',
            'city' => 'required|string',
            'state' => 'required|string',
            'about' => 'string',
        ]);

        $profile = Profile::where('user_id', auth()->user()->profile->user_id)->first();
        $profile->dob = $request->date_of_birth;
        $profile->gender = $request->gender;
        $profile->religion = $request->religion;
        $profile->city = $request->city;
        $profile->state = $request->state;
        $profile->about = $request->about;
        $profile->completed = true;
        $profile->Save();

        $medicalHistory = new MedicalHistory;
        $medicalHistory->user_id = auth()->id();
        $medicalHistory->save();

        if($profile){
            return redirect()->back()->with('message', 'Profile updated!');
        }
    }

    // Medical History

    public function editMedicalHistory()
    {
        $profile = Profile::where('user_id', auth()->user()->profile->user_id)->first();
        $history = MedicalHistory::where('user_id', auth()->id())->firstOrFail();
        return view('user.profiles.edit-medical-history', compact ('history', 'profile'));
    }

    public function storeMedicalHistory(Request $request)
    {
        // $this->validate($request, [
        //     'description' => 'required',
            
        // ]);

        $history = MedicalHistory::where('user_id', auth()->id())->first();
        $history->chronic_illness = $request->chronic_illness;
        $history->no_children = $request->no_children;
        $history->no_delivery = $request->no_delivery;
        $history->no_pregnacy = $request->no_pregnacy;
        $history->last_menst_period = $request->last_menst_period;
        $history->past_B_transfusion = $request->past_B_transfusion;
        $history->drug_history = $request->drug_history;
        $history->past_surgry = $request->past_surgry;
        $history->past_hospital = $request->past_hospital;
        $history->completed = true;
        $history->save();

        return redirect()->back()->with('message', 'Medical History updated!');
    }


}

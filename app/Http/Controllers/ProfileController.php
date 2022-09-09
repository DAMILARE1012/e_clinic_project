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
        $role = auth()->user()->role;
        $specializations = Specialization::all();
        
        if ($role = 1) {
            return view('user.profiles.edit', compact('specializations'));
        }elseif($role = 3){
            return view('receptionist.profiles.edit', compact('specializations'));
        }elseif($role = 4){
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
        return view('user.profiles.edit-medical-history');
    }

    public function storeMedicalHistory(Request $request)
    {
        $this->validate($request, [
            'description' => 'required'
        ]);

        $history = MedicalHistory::where('user_id', auth()->id())->first();
        $history->description = $request->description;
        $history->completed = true;
        $history->save();

        return redirect()->back()->with('message', 'Medical History updated!');
    }


}

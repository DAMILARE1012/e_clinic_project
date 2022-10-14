<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Specialization;
use App\Models\Profile;
use App\Models\User;
use App\Models\MedicalHistory;
use Auth;
use Carbon;
use Hash; 

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

    public function editProfileA()
    {
        $role = auth()->user()->role_id;
        $specializations = Specialization::all();
        
        if ($role == 1) {
            return view('user.profiles.profile-edit', compact('specializations'));

        }elseif($role == 3){
            return view('receptionist.profiles.profile-edit', compact('specializations'));

        }elseif($role == 4){
            return view('specialist.profiles.profile-edit', compact('specializations'));
        }
    }

    public function updateProfileA(Request $request)
    {
        // dd($request);
        $user_profile = User::where('id', Auth::id())->first();
        if ($request->filled('current_password')) {

            if (!(Hash::check($request->get('current_password'), Auth::user()->password)))
            {
                return redirect()->back()->with('error','Your Current Password does not matches!');
            }
    
            if(strcmp($request->get('current_password'), $request->get('new_password')) ==0)
            {
                return redirect()->back()->with('error', 'New Password Cannot be same as your old password!');
            }
    
            $user_profile->password = bcrypt($request->get('new_password'));
    
            }
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
        $profile->date_of_birth = $request->date_of_birth;
        $profile->gender = $request->gender;
        $profile->religion = $request->religion;
        $profile->city = $request->city;
        $profile->state = $request->state;
        $profile->about = $request->about;
        $profile->completed = true;
        $user_profile->firstname = $request->firstname;
        $user_profile->lastname = $request->lastname;
        $user_profile->email = $request->email;
        $profile->Save();
        $user_profile->save();
         
        return redirect()->back()->with('message', 'Profile updated!');
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
        $profile->date_of_birth = $request->date_of_birth;
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
    public function MedicalHistory()
    {
        $profile = Profile::where('user_id', auth()->user()->profile->user_id)->first();
        $history = MedicalHistory::where('user_id', auth()->id())->firstOrFail();
        return view('user.profiles.medical_history', compact ('history', 'profile'));
    }


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
        $history->no_miscarrage = $request->no_miscarrage;
        $history->completed = true;
        $history->save();

        return redirect()->back()->with('message', 'Medical History updated!');
    }


}

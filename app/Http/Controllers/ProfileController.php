<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Specialist;
use App\Models\Profile;
use App\Models\User;
use App\Models\MedicalCheck;
use Auth;
use Carbon;
use Hash;

class ProfileController extends Controller
{
    public function editProfile()
    {
        $role = auth()->user()->role_id;

        if ($role === 1) {
            return view('user.profiles.edit');
        }elseif($role === 3){
            return view('receptionist.profiles.edit');
        }elseif($role === 4){
            return view('specialist.profiles.edit');
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
            'contacts'=>'required|string',
            'height' => 'nullable|integer',
            'weight' => 'nullable|integer',
            'state' => 'required|string',
            'about' => 'required',
        ]);

        $profile = Profile::where('user_id', auth()->user()->profile->user_id)->first();
        $profile->date_of_birth = $request->date_of_birth;
        $profile->gender = $request->gender;
        $profile->religion = $request->religion;
        $profile->city = $request->city;
        $profile->state = $request->state;
        $profile->contacts = $request->contacts;
        $profile->height = $request->height;
        $profile->weight = $request->weight;
        $profile->about = $request->about;
        $profile->about = $request->about;
        $profile->completed = true;
        $profile->Save();

        if($profile){
            return redirect()->back()->with('message', 'Profile update successful!');
        }
    }

    // Medical History
    public function MedicalCheck()
    {

        $profile = Profile::where('user_id', auth()->user()->profile->user_id)->first();
        $history = MedicalCheck::where('user_id', auth()->id())->firstOrFail();
        return view('user.profiles.medical_history', compact ('history', 'profile'));
    }


    public function editMedicalHistory()
    {
        $profile = Profile::where('user_id', auth()->user()->profile->user_id)->first();
        $history = MedicalCheck::where('user_id', auth()->id())->firstOrFail();
        return view('user.profiles.edit-medical-history', compact ('history', 'profile'));
    }

    public function storeMedicalHistory(Request $request)
    {
        $this->validate($request, [
            // required if female
            // 'no_children' => 'required',
            // 'no_delivery' => 'required',
            // 'no_pregnacy' => 'required',
            // 'last_menst_period' => 'required',
            // 'no_miscarriage' => 'required',

            // required mall
            'chronic_illness' => 'required',
            'past_B_transfusion' => 'required',
            'drug_history' => 'required',
            'past_surgry' => 'required',
            'past_hospital' => 'required',
            'organ_donor' => 'required',
            'allergies' => 'required',
            'blood_type' => 'required',


        ]);

        $history = MedicalCheck::where('user_id', auth()->id())->first();
        $history->chronic_illness = $request->chronic_illness;
        $history->no_children = $request->no_children;
        $history->no_delivery = $request->no_delivery;
        $history->no_pregnacy = $request->no_pregnacy;
        $history->last_menst_period = $request->last_menst_period;
        $history->past_B_transfusion = $request->past_B_transfusion;
        $history->drug_history = $request->drug_history;
        $history->past_surgry = $request->past_surgry;
        $history->past_hospital = $request->past_hospital;
        $history->organ_donor = $request->organ_donor;
        $history->allergies = $request->allergies;
        $history->blood_type = $request->blood_type;
        $history->no_miscarrage = $request->no_miscarrage;
        $history->completed = true;
        $history->save();

        return redirect()->back()->with('message', 'Medical History updated!');
    }

    public function changePassword()
    {
        return view('user.profiles.change-password');
    }

    public function updatePassword(Request $request)
    {

        $this->validate($request, [
            'current_password' => 'required',
        ]);

        $user = Auth::user();


        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'Your Current Password does not matches!']);
        }


        if(strcmp($request->current_password, $request->new_password) == 0)
        {
            return redirect()->back()->withErrors(['new_password' => 'New Password Cannot be same as your old password!']);
        }

        $user->password = bcrypt($request->new_password);
        $user->save();

        return redirect()->back()->with('message', 'Password updated succesfully');


    }
}

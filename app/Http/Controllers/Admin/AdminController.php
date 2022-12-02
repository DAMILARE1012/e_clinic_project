<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Specialization;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }

    public function admins()
    {
        $admins = User::where('role_id', 2)->get();
        return view('admin.accounts.admins', compact('admins'));
    }

    public function specialists()
    {
        $specialists = User::where('role_id',4)
                        ->orWhere('role_id',3)
                        ->get();
        return view('admin.accounts.specialists', compact('specialists'));
    }

    public function users()
    {
        $users = User::where('role_id', 1)->get();
        return view('admin.accounts.users', compact('users'));
    }

    public function createNewAccount()
    {
        $roles = Role::all();
        $specializations = specialization::all();
        return view('admin.accounts.new', compact('roles','specializations'));
    }

    public function addAccount(Request $request)
    {

        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);  

        $user = new User;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->role_id = $request->role;
        $user->password = Hash::make('password123');
        $user->save();

        if($user){
            $user->profile()->create(['user_id' => $user->id]); 
            
            if(!$request->specialization == null){
                $user->specialization()->create([
                'user_id' => $user_id,
                'name' => $request->specialization,
                ]);
            }
           
        }else{
            $message = "User Not Created, Try again";
        }
        
        return redirect()->back();

    }
}

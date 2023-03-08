<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Specialist;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::where('role_id', 1)->get();
        $specialists = User::where('role_id', 4)->get();
        return view('admin.home', compact('users', 'specialists'));
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
        $specializations = Specialist::all();
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
        $user->specialist_id = $request->specialization;
        $user->password = Hash::make('password123');
        $user->save();

        if($user){
            $user->profile()->create(['user_id' => $user->id]);    
           
        }else{

            return redirect()->back()->with([
                'alert' => 'danger',
                'message' => 'User Not Created, Try again',
    
            ]);
        }
        
        return redirect()->back()->with([
            'alert' => 'success',
            'message' => 'User account created successfully',

        ]);

    }
}

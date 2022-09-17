<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complaint;
use Carbon\Carbon;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['profile.updated', 'check.medical.history']);
    }

    public function index() 
    {
        // dd(Auth::id());
        $todayRequests = Complaint::where('user_id', Auth::id())->whereDate('created_at', Carbon::today())->first();

        return view('user.home', compact('todayRequests'));
    }
}

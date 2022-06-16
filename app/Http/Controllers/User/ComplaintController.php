<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complaint;
use Auth;

class ComplaintController extends Controller
{
    public function createNewComplaint()
    {
        return view('user.requests.create');
    }

    public function storeNewComplaint(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
        ]);

        Complaint::create([
            'patient_id' => Auth::id(),
            'description' =>  $request->description,

        ]);

        return redirect()->route('user.dashboard')->with('message', 'Complaint sent successful, A specialist will be assigned to you soon');



    }
}

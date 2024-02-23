<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Complaint;


class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $complaints = Complaint::where('user_id', $id)->orderBy('created_at', 'desc')->get();
        if($complaints->count() > 0){
            return response([
                'complaints' => '$complaints',
                'status' => true,
            ], 200);
        }
        else{
            return response([
                'message' => 'No complaints made!, Kindy make a complaint',
                'status' => true
            ], 200);
        }
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $user_id)
    {
        $todayRequests = Complaint::where('user_id', $user_id)->whereDate('created_at', Carbon::today())->first();
        if($todayRequests){
            return response([
                'message' => 'You already have a pending request',
                'status' => true
            ], 200);
        }

        $request->validate([
            'questionnaires' => 'required',
            'specialist' => 'required',
            'description' => 'required',  
        ]);

        

        return Product::create($request->all());
    
    }

}

<?php

namespace App\Http\Controllers\Api\User;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use Auth;
use Carbon;

class ProfileController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $profile = Profile::where('user_id', $id)->first();
        return response([
            'profile' => $profile,
            'status' => true,
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $dt = new Carbon\Carbon();
        $before = $dt->subYears(13)->format('Y-m-d');
        $before = Carbon\Carbon::parse($before);
        $before = $before->diffForHumans();

        $request->validate([
            'date_of_birth' => 'required|before:'.$before,
            'gender' => 'required|string',
            'religion' => 'required|string',
            'specialization' => 'string',
            'city' => 'required|string',
            'contacts'=>'required|string',
            'height' => 'nullable|integer',
            'weight' => 'nullable|integer',
            'state' => 'required|string',
            'about' => 'required'
        ]);

        $profile = Profile::find($id);
        $profile->completed = true;
        $profile->update($request->all());

        return response([
            'profile' => $profile,
            'status' => true
        ], 200);

    }
}

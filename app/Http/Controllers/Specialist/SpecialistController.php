<?php

namespace App\Http\Controllers\Specialist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PatientSpecialist;

class SpecialistController extends Controller
{
    public function index()
    {
        return view('specialist.home');
    }

    public function getAssignedPatients()
    {
        $assigned = PatientSpecialist::where('specialist_id', auth()->id())->get();

        return view('specialist.assigned.index', compact('assigned'));
    }
}

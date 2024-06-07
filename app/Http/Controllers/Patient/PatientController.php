<?php

namespace App\Http\Controllers\Patient;
use App\Http\Controllers\Controller;
use App\Models\Section;

class PatientController extends Controller
{
    public function index(){
        $sections=Section::all();
    return view('Patient.patient-welcome',compact('sections'));
    }
}

<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Doctor;
use App\Models\patient;
use App\Models\Section;

class DoctorController extends Controller
{
   
    public function index(){
        $sections=Section::count();
        $articles=Article::count();
        $doctors=Doctor::count();
        $patient=patient::count();
        $emails=auth()->user()->email;
        $doctor=Doctor::where('email',$emails)->first();
    return view('Doctor.dashboard',compact('sections','articles','doctors','patient','doctor'));
    }
}

<?php

namespace App\Http\Controllers\Patient;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Doctor;
use App\Models\Section;

class PatientController extends Controller
{
    public function index(){
        $sections=Section::all();
        $articles=Article::all();
        $doctors=Doctor::all();
    return view('Patient.patient-welcome',compact('sections','articles','doctors'));
    }
    public function artical(){
       
        $articles=Article::all();
    return view('Patient.Artical',compact('articles'));
    }
    public function dashboard(){
        $sections=Section::count();
        $articl=Article::count();
        $articles=Article::all();
        $doctors=Doctor::count();
    return view('Patient.dashboard',compact('sections','articles','doctors','articl'));
    }
}

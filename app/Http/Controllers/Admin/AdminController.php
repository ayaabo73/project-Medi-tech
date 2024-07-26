<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Doctor;
use App\Models\patient;
use App\Models\Section;

class AdminController extends Controller
{
   public function index(){
      $sections=Section::count();
      $articles=Article::count();
      $doctors=Doctor::count();
      $patient=patient::count();
  return view('Admin.dashboard',compact('sections','articles','doctors','patient'));
  }
}

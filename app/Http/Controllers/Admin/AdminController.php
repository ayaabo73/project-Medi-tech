<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index(){
    return "admin";
   }

public function sections(){
   return view('Admin.Sections');
}





}

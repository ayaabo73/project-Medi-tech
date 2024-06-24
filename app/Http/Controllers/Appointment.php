<?php

namespace App\Http\Controllers;

use App\Models\AppointmentHour;
use App\Models\Days;
use App\Models\Doctor;
use Illuminate\Http\Request;

class Appointment extends Controller
{
    public function index(){

   
    $appointments=AppointmentHour::all();
    $doctor=Doctor::all();
    $day=Days::all();
    return view('Patient.AppointmentCreate',compact('appointments','doctor','day'));
}
 }

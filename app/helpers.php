<?php

use App\Models\admin;
use App\Models\Admin as ModelsAdmin;
use App\Models\Doctor;
use App\Models\patient;

if(!function_exists('hello')) {
    function hello()
    {
        return "test";
    }
}

if(!function_exists('admin')) {
    function admin(): ?admin
    {
        return optional(auth('admin')->user())->admin;
    }
    
}
if(!function_exists('doctor')) {
    function doctor(): ?Doctor
    {
        return optional(auth('dctor')->user())->doctor;
    }
    
}
if(!function_exists('patient')) {
    function patient(): ?patient
    {
        return optional(auth('patient')->user())->patient;
    }
    
}
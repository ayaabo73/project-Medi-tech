<?php

namespace App\Livewire\Appointments;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Section;
use Livewire\Component;

class Create extends Component
{
    public $doctors;
    public $sections;
    public $doctor;
    public $section;
    public $name;
    public $age;
    public $Gende;
    public $appointment;
    public $time;
    public $section_id;
    public $doctor_id;
    public $email;
    public $phone;
    public $message= false;
    

    public function mount()
    {

      $this->sections = Section::get();
      $this->doctors = [];

    }
   
    public function render()
    {
       
        return view('livewire.appointments.create');
    }

    public function reloadDoctors()
    {
        $this->doctors = Doctor::where('sections_id', $this->section_id)
            ->pluck('name', 'id')
            ->toArray();
    }

     public function store(){

        $appointments=new Appointment();
        $appointments->doctorID = $this->doctor_id;
        $appointments->sectionID = $this->section_id;
        $appointments->name = $this->name;
        $appointments->age = $this->age;
        $appointments->Gende= $this->Gende;
        $appointments->time = $this->time;
        $appointments->email = $this->email;
        $appointments->phone = $this->phone;
        $appointments->appointment = $this->appointment;
        $appointments->notes = $this->notes;
        $appointments->save();
        session()->flash('message','The reservation details have been sent to the doctor,and appointment information will be sent via phone or email');
        $this->reset('doctor_id');
        $this->reset('section_id');
        $this->reset('name');
        $this->reset('email');
        $this->reset('phone');
        $this->reset('appointment');
        $this->reset('notes');

    }
 
}

<?php

namespace App\Livewire\Appointments;

use App\Models\Appointment;
use App\Models\AppointmentHour;
use App\Models\Days;
use App\Models\Doctor;
use App\Models\Section;
use Carbon\CarbonInterval;
use Illuminate\Support\Facades\Auth;
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
    public $message= false;
    public $appointments;
    public $times;
    public $days;
   
    

    public function mount()
    {

      $this->sections = Section::get();
      $this->doctors = [];
      $this->doctors = Doctor::get();
      $this->appointments= [];
      $this->times = [];
      $this->days=Days::get();
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
    public function reloadAppointment()
    {   
        $this->appointments = AppointmentHour::where('doctors_id', $this->doctor_id)
            ->pluck('day_id', 'id')
            ->toArray();
          
    }
    public function reloadTime()
    {
        $this->times = AppointmentHour::where('day_id',$this->appointments)
            ->pluck('from', 'id')
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

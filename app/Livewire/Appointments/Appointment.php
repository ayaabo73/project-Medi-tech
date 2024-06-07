<?php

namespace App\Livewire\Appointments;

use App\Models\Appointment as ModelsAppointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Appointment extends Component
{
    public $auth_id;
    public function mount()
 {
    
    $this->auth_id = Auth::guard('doctor')->user()->id; 

 }

    public function render()
    {
        $appointments = ModelsAppointment::where('type','Appointment')->where('doctorID',$this->auth_id)->get();
        return view('livewire.appointments.appointment',['appointments'=> $appointments]);
    }


    public function approval( )
    {
        
      
        dd($this->appointment);
        // $appointment->type='ConfirmedAppointment';
        // $appointment->appointment=$request->appointment;
        // $appointment->update();
           
        
      

   }
}

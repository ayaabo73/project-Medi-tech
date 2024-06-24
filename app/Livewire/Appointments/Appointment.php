<?php

namespace App\Livewire\Appointments;

use App\Models\Appointment as ModelsAppointment;
use App\Models\AppointmentHour;
use Carbon\CarbonPeriod;
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
        $appointmenthour=AppointmentHour::all();
       
        return view('livewire.appointments.appointment',);
    }


    public function approval( )
    {
        
      
        dd($this->appointment);
        // $appointment->type='ConfirmedAppointment';
        // $appointment->appointment=$request->appointment;
        // $appointment->update();
           
        
      

   }
}

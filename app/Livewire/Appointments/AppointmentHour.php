<?php

namespace App\Livewire\Appointments;

use App\Models\AppointmentHour as ModelsAppointmentHour;
use App\Models\Days;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AppointmentHour extends Component
{ 
   public $day_id;
  public $from;
  public $to; 
  public $step;
  public $off;
  public $doctor_id;
  public $auth_id;



  public function mount()
{
  
  $this->auth_id = Auth::guard('doctor')->user()->id; 

}
    public function render()
    {
    
      $days=Days::all();
        return view('livewire.appointments.appointmentHour',['days'=>  $days]);
    }

    public function booking(Request $request){ 
      $this->Validate([
        'day_id'  =>'required',
        'from'  =>'required',
        'to'  =>'required',
        'step'  =>'required',


      ]);
    //  $appointments = ModelsAppointmentHour::where('day_id',$this->day_id)->where('doctors_id',$this->auth_id)->get();
    // if($appointments!=null){
    //   session()->flash('message','error');
    //   return redirect()->to('/AppointmentHour');
    // }
    
     $appointment=new ModelsAppointmentHour();
     $appointment->doctors_id=auth()->id();
     $appointment->day_id=$this->day_id;
     $appointment->from=$this->from;
     $appointment->to=$this->to;
     $appointment->step=$this->step;
     $appointment->save();
     session()->flash('message','success');
     return redirect()->to('/AppointmentHour');
    
   
   
   
   
}
}
   

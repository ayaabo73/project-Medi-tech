<?php

namespace App\Livewire\Appointments;

use App\Models\Appointment;
use Livewire\Component;

class ConfirmedAppointment extends Component
{
    public function render()
    {
        $appointments = Appointment::where('type','ConfirmedAppointment')->get();
        return view('livewire.appointments.confirmed-appointment',['appointments'=> $appointments]);
    }
}

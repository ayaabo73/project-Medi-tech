<?php

namespace App\Livewire\Chat;

use App\Models\Doctor;
use App\Models\patient;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateChat extends Component
{
    public $patients;
    public function render()
    {
        if(Auth::guard('web')->check()){
            $this->patients = Doctor::all();
        }
        else{
            $this->patients = patient::all();
        }
        return view('livewire.chat.create-chat');
    }
}

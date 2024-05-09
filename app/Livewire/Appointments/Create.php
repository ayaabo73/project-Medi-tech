<?php

namespace App\Livewire\Appointments;

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
    public $email;
    public $phone;
    public $notes;
    public $message= false;
    public $section_id;

    public function mount(){

      $this->sections = Section::get();
      $this->doctors = Doctor::all();

    }
    public function render()
    {
       
        return view('livewire.appointments.create',
        [
            $this->doctors = $this->doctors,'sections' => Section::get()
        ]);
    }
    
    public function updatedSection($section_id){
    
        $this->doctors= Doctor::find($section_id)->sections;
      
     }
}

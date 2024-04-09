<?php

namespace App\Livewire\Admin;

use App\Models\Doctor;
use App\Models\Section;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class CreateDoctor extends Component
{ use WithPagination;
    use WithFileUploads;
    public $name;
   public $email;
   public $phone; 
   public $location;
   public $password;
   public $section;
   public $image;
    public function render()
    {
       $sections=Section::all();
        return view('livewire.admin.Create_doctor',['sections'=>$sections]);   
    }
    
    public function return_to_addDoctor(){
        return redirect()->to('/Doctor');
    }
    public function save(Request $request){ 
        $this->Validate([
          'name'  =>'required',
          'email'  =>'required',
          'phone'  =>'required',
          'location'  =>'required',
         'password'  =>'required',
          'section'  =>'required',
          'image'  =>'nullable|mimes:jpg,jpeg,gif,png|max:20000',
        ]);
     
       $doctor=new Doctor;
       $doctor->name=$this->name;
       $doctor->email=$this->email;
       $doctor->phone=$this->phone;
       $doctor->location=$this->location;
       $doctor->password=$this->password;
       $doctor->sections_id=$this->section;
       $image=$this->image->store('photos','public');
       $doctor->image=$image;
       $doctor->save();
       session()->flash('message','success');
       return redirect()->to('/Doctor');
      }
}

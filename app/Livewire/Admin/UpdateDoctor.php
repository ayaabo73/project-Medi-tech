<?php

namespace App\Livewire\Admin;

use App\Models\Doctor;
use App\Models\Section;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Livewire\Attributes\Validate;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class UpdateDoctor extends Component
{ use WithPagination;
    use WithFileUploads;
    public $id;
    public $name;
   public $email;
   public $phone; 
   public $location;
   public $password;
   public $section;
   public $image;
   public $doctor;
   public $image_original;

   public function mount(){
    $this->id=request()->id;
    $this->doctor=Doctor::whereId($this->id)->first();
    $this->name=$this->doctor->name;
    $this->email=$this->doctor->email;
    $this->phone=$this->doctor->phone;
    $this->location=$this->doctor->location;
    $this->password=$this->doctor->password;
    $this->section=$this->doctor->sections_id;
    $this->image_original=$this->doctor->image;

   }
    public function render()
    {
        $sections=Section::all();
        return view('livewire.admin.update_doctor',['sections'=>$sections,'doctor'=>$this->doctor]);   
    }
    
    public function return_to_addDoctor(){
        return redirect()->to('/Doctor');
    }
    public function update(Request $request){ 
        $this->Validate([
          'name'  =>'required',
          'email'  =>'required',
          'phone'  =>'required',
          'location'  =>'required',
         'password'  =>'required',
          'section'  =>'required',
          'image'  =>'nullable|mimes:jpg,jpeg,gif,png|max:20000',
        ]);
     
      $doctor=Doctor::whereId($this->id)->first();
       $doctor->name=$this->name;
       $doctor->email=$this->email;
       $doctor->phone=$this->phone;
       $doctor->location=$this->location;
       $doctor->password=bcrypt($this->password);
       $doctor->sections_id=$this->section;
       if($image=$this->image){
       if(File::exists('storage/photos/'.$this->image)){
        unlink('storage/photos/'.$this->image);
       }
       $image=$this->image->store('photos','public');
       $doctor->image=$image;
    }
       $doctor->update();
       session()->flash('message','success');
       return redirect()->to('/Doctor');
      }
}

<?php

namespace App\Livewire\Admin;

use App\Models\Doctor;
use App\Models\Section;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Livewire\Attributes\Validate;

class UpdateSection extends Component
{ 
    public $id;
    public $name;
   public $section;
   public $doctor;

   public function mount(){
    $this->id=request()->id;
    $this->section=Section::whereId($this->id)->first();
    $this->name=$this->section->name;
    

   }
    public function render()
    {
        $doctors=Section::find($this->id)->Doctor;
        return view('livewire.admin.Update_section',['doctors'=>$doctors,'section'=>$this->section]);   
    }
    
    public function return_to_addSection(){
        return redirect()->to('/Sections');
    }
    public function update_section(Request $request){ 
        $this->Validate([
          'name'  =>'required',
         
        ]);
     
      $section=Section::whereId($this->id)->first();
       $section->name=$this->name;
    
       $section->update();
       session()->flash('message','success');
       return redirect()->to('/Sections');
      }
      public function delete_doctor($id){
        $doctor=doctor::whereId($id);
        $doctor->delete();
        DB::statement("SET @count = 0;");
        DB::statement("UPDATE doctors SET doctors.id = @count:= @count + 1;");
        DB::statement("ALTER TABLE doctors AUTO_INCREMENT = 1;");
        session()->flash('message','success');
        return redirect()->to('/Sections');

    }
}

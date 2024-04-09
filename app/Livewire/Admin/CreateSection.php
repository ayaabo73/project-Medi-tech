<?php

namespace App\Livewire\Admin;

use App\Models\Doctor;
use App\Models\Section;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class CreateSection extends Component
{ use WithPagination;
    use WithFileUploads;
    public $name;
   
    public function render()
    {
        return view('livewire.admin.create_section');   
    }
    
    public function return_to_addsection(){
        return redirect()->to('/Section');
    }
    public function save(Request $request){ 
        $this->Validate([
          'name'  =>'required',
        ]);
     
       $section=new Section();
       $section->name=$this->name;
       $section->save();
       session()->flash('message','success');
       return redirect()->to('/Section');
      }
}

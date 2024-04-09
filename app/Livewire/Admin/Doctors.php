<?php

namespace App\Livewire\Admin;

use App\Models\Doctor;
use App\Models\Section;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class Doctors extends Component
{ use WithPagination;
    use WithFileUploads;
    public function render()
    {  $sections=Section::all();
        $doctors= Doctor::with('Section')->orderBy('id')->paginate(5);
        return view('livewire.admin.Doctor',['doctors'=>$doctors,'sections'=>$sections]);
    }
    
    public function create_doctor(){
   
      return redirect()->to('/create/doctor');
    }
    
    public function update_doctor($id){
        $doctor=Doctor::whereId($id)->first();
        return redirect()->to('update/doctor/'.$id);
    }


    public function delete_doctor($id){
        $doctor=doctor::whereId($id);
        $doctor->delete();
        DB::statement("SET @count = 0;");
        DB::statement("UPDATE doctors SET doctors.id = @count:= @count + 1;");
        DB::statement("ALTER TABLE doctors AUTO_INCREMENT = 1;");
        session()->flash('message','success');
        return redirect()->to('/Doctor');

    }
    
}



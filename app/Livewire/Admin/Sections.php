<?php

namespace App\Livewire\Admin;

use App\Models\Doctor;
use App\Models\Section;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class Sections extends Component
{
    use WithPagination;
    use WithFileUploads;
    public function render()
    {   $doctor=Doctor::all();
        $sections= Section::all();
        return view('livewire.admin.Section',['doctor'=>$doctor,'sections'=>$sections]);
    }
    
    public function create_section(){
   
      return redirect()->to('/create/section');
    }
    
    public function update_section($id){
        $section=Section::whereId($id)->first();
        return redirect()->to('update/section/'.$id);
    }


    public function delete_section($id){
        $section=Section::whereId($id);
        $section->delete();
        DB::statement("SET @count = 0;");
        DB::statement("UPDATE sections SET sections.id = @count:= @count + 1;");
        DB::statement("ALTER TABLE sections AUTO_INCREMENT = 1;");
        session()->flash('message','success');
        return redirect()->to('/Section');

    }
}

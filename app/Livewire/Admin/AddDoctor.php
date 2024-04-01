<?php

namespace App\Livewire\Admin;

use App\Models\Doctor;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class AddDoctor extends Component
{ use WithPagination;
    use WithFileUploads;
   




    public function render()
    {
        $doctors= Doctor::with('Section')->orderBy('id','desc')->paginate(5);
        return view('livewire.admin.add-doctor',['doctors'=>$doctors]);
    }
    public function create_doctor(){
        $sections=Section::all();
        return view('livewire.admin.create_doctor',['sections'=>$sections]);
    }
    
    public function save_doctor(Request $request){ 
      $validator=Validator::make($request->all(),[
        'name'  =>'required',
        'email'  =>'required',
        'phone'  =>'required',
        'location'  =>'required',
       'password'  =>'required',
        'section'  =>'required',
        'image'  =>'nullable|mimes:jpg,jpeg,gif,png|max:20000',
      ]);
      if($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInput();
      }
      dd($request->all());
    }











    public function delete_doctor($id){
        $doctor=doctor::whereId($id);
        $doctor->delete();
        session()->flash('message','success');
        return redirect()->to('/add-doctor');

    }
}

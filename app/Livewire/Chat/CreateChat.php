<?php

namespace App\Livewire\Chat;

use App\Models\Conversation;
use App\Models\Doctor;
use App\Models\patient;
use App\Models\Section;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CreateChat extends Component
{
    public $patients;
    public $sections;
    public function render()
    {
        if(Auth::guard('web')->check()){
            $this->patients = Doctor::all();
            $this->sections=Section::all();
        }
        else{
            $this->patients = patient::all();
        }
        return view('livewire.chat.create-chat');
    }
    
    
    public function create_Conversation(){
        DB::beginTransaction();
        try{
            $createConversation= Conversation::create([

                'sender_email'=>'',
                'receiver_email'=>'',
                'last_time_message'=>null,
            ]);


        }

        catch(\Exception $e ){
            DB::rollBack();

        }

    }

}

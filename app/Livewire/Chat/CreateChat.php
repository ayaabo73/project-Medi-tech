<?php

namespace App\Livewire\Chat;

use App\Models\Conversation;
use App\Models\Doctor;
use App\Models\Message;
use App\Models\patient;
use App\Models\Section;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CreateChat extends Component
{
    public $patients;
    public $sections;
    public $auth_email;
    public function mount(){
        $this->auth_email=auth()->user()->email;
    }
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
    
    
    public function create_Conversation($receiver_email){

       $chek_conversation=Conversation::where('sender_email',$this->auth_email)
       ->where('receiver_email',$receiver_email)->orwhere('receiver_email',$this->auth_email)
       ->where('sender_email',$receiver_email)->get();
      if($chek_conversation->isEmpty()){ 
         DB::beginTransaction();
        try{
            $createConversation= Conversation::create([

                'sender_email'=>$this->auth_email,
                'receiver_email'=>$receiver_email,
                'last_time_message'=>null,
            ]);
           Message::create([
           'conversations_id'=>$createConversation->id,
           'sender_email'=>$this->auth_email,
           'receiver_email'=>$receiver_email,
           'body'=>'sghhh',

           ]);
           DB::commit();

        }

        catch(\Exception $e ){
            DB::rollBack();

        }}
    else{
     dd('yes');
    }
      

    }

}

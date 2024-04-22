<?php

namespace App\Livewire\Chat;

use App\Models\Conversation;
use App\Models\Doctor;
use App\Models\patient;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ChatList extends Component
{
    public $Conversations;
    public $auth_email;
    public $receviverUser;
    public $selected_conversation;

    protected $listeners = ['chatUserSelected', 'refresh' => '$refresh'];
    
    public function mount(){
        $this->auth_email=auth()->user()->email;
    }

    public function get(Conversation $Conversation,$request ){

        if ($Conversation->sender_email == $this->auth_email) {
            $this->receviverUser = Doctor::firstwhere('email', $Conversation->receiver_email);
        } 
        else {
          $this->receviverUser = patient::firstwhere('email', $Conversation->sender_email);
        }
        if (isset($request)) {
            return $this->receviverUser->$request;
        }

    }
   
    public function chatUserSelected(Conversation $Conversation , $receiver_id)
    {
        $this->selected_conversation = $Conversation;
        $this->receviverUser = Doctor::find($receiver_id);
        if (Auth::guard('web')->check()) {
            $this->dispatch('load_conversationDoctor',$this->selected_conversation, $this->receviverUser);
            $this->dispatch('updateMessage', $this->selected_conversation, $this->receviverUser);
        }

         else {
            $this->dispatch('load_conversationPatient',$this->selected_conversation, $this->receviverUser);
            $this->dispatch( 'updateMessage2', $this->selected_conversation, $this->receviverUser);
        }

    }
    public function render()
    {
        $this->Conversations=Conversation::where('sender_email',$this->auth_email)
        ->orwhere('receiver_email',$this->auth_email)
        ->orderBy('created_at', 'DESC')
        ->get(); 
        return view('livewire.chat.chat-list');
    }
}

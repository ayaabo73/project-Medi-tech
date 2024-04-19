<?php

namespace App\Livewire\Chat;

use App\Models\Conversation;
use App\Models\Doctor;
use App\Models\Message;
use App\Models\patient;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ChatBox extends Component
{
    public $receiver;
    public $selected_conversation;
    public $receviverUser;
    public $messages;
    public $auth_email;
    public $auth_id;
    public $event_name;
    public $chat_page;

 protected $listeners = ['load_conversationDoctor','load_conversationPatient'];

 public function mount()
 {
     if (Auth::guard('web')->check()) {
         $this->auth_email = Auth::guard('web')->user()->email;
         $this->auth_id = Auth::guard('web')->user()->id;
     } else {
         $this->auth_email = Auth::guard('doctor')->user()->email;
         $this->auth_id = Auth::guard('doctor')->user()->id;
     }

 }
    public function load_conversationDoctor(Conversation $conversation, Doctor $receiver)
    {
        $this->selected_conversation = $conversation;
        $this->receviverUser = $receiver;
        $this->messages = Message::where('conversations_id', $this->selected_conversation->id)->get();
    }
    public function load_conversationPatient(Conversation $conversation, patient $receiver)
    {

        $this->selected_conversation = $conversation;
        $this->receviverUser = $receiver;
        $this->messages = Message::where('conversations_id', $this->selected_conversation->id)->get();
    }

    public function render()
    {
        return view('livewire.chat.chat-box');
    }
}

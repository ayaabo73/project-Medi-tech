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

//  protected $listeners = ['load_conversationDoctor','load_conversationPatient', 'pushMessage'];

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
 public function getListeners()
 {
     if (Auth::guard('web')->check()) {
         $auth_id = Auth::guard('web')->user()->id;
         $this->event_name = "MassageSent2";
         $this->chat_page = "chat2";

     } else {
         $auth_id = Auth::guard('doctor')->user()->id;
         $this->event_name = "MassageSent";
         $this->chat_page = "chat";
     }

     return [
         "echo-private:$this->chat_page.{$auth_id},$this->event_name" => 'broadcastMassage', 'load_conversationPatient', 'load_conversationDoctor', 'pushMessage'
     ];
 }

 public function pushMessage($messageId)
    {
        $newMessage = Message::find($messageId);
        $this->messages->push($newMessage);
    }

    public function broadcastMassage($event)
    {
        $broadcastMessage = Message::find($event['message']);
        $broadcastMessage->read = 1;
        $this->pushMessage($broadcastMessage->id);
    }

    public function load_conversationDoctor(Conversation $Conversation , Doctor $receiver)
    { 
        $this->selected_conversation = $Conversation;
        $this->receviverUser = $receiver;
       $this->messages = Message::where('conversations_id', $this->selected_conversation->id)->get();
    }
    public function load_conversationPatient(Conversation $Conversation , patient $receiver)
    {

        $this->selected_conversation = $Conversation ;
        $this->receviverUser = $receiver;
        $this->messages = Message::where('conversations_id', $this->selected_conversation->id)->get();
    }

    public function render()
    {
        return view('livewire.chat.chat-box');
    }
}

<?php

namespace App\Livewire\Chat;

use App\Events\ChatMessageEvent;
use App\Models\Conversation;
use App\Models\Doctor;
use App\Models\Message;
use App\Models\patient;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SendMessage extends Component
{
    public $body;
    public $selected_conversation;
    public $receviverUser;
    public $auth_email;
    public $sender;
    public $createdMessage;
    protected $listeners = ['updateMessage','dispatchSentMassage','updateMessage2'];

    public function mount()
    {

        if (Auth::guard('web')->check()) {
            $this->auth_email = Auth::guard('web')->user()->email;
            $this->sender = Auth::guard('web')->user();
        } else {
            $this->auth_email = Auth::guard('doctor')->user()->email;
            $this->sender = Auth::guard('doctor')->user();
        }
    }

    public function updateMessage(Conversation $Conversation, Doctor $receiver)
    {
        $this->selected_conversation = $Conversation;
        $this->receviverUser = $receiver;
    }

    public function updateMessage2(Conversation $Conversation, patient $receiver)
    {
        $this->selected_conversation = $Conversation;
        $this->receviverUser = $receiver;
    }

    public function sendMessage()
    {
        if ($this->body == null) {
            return null;
        }

        $this->createdMessage = Message::create([
            'conversations_id' => $this->selected_conversation->id,
            'sender_email' => $this->auth_email,
            'receiver_email' => $this->receviverUser->email,
            'body' => $this->body,
        ]);
        event(new ChatMessageEvent($this->createdMessage));
        $this->selected_conversation->last_time_message = $this->createdMessage->created_at;
        $this->selected_conversation->save();
        $this->reset('body');
        $this->dispatch('refresh');
        $this->dispatch('clear-message');
         
    }
    
   
    public function render()
    {
        return view('livewire.chat.send-message');
    }
}

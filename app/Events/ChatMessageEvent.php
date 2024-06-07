<?php

namespace App\Events;

use App\Models\Message;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ChatMessageEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $conversationId;
    public $messageId;
    /**
     * Create a new event instance.
     */
    public function __construct(Message $message)
    {
        $this->messageId = $message->id;
        $this->conversationId = $message->conversations_id;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            "conversation.{$this->conversationId}",
        ];
    }
}

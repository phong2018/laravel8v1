<?php

namespace  Phonglg\LaravelEchoServer\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class RoomPresenceNotification implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $roomId;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($roomId)
    {
        // dd($message);
        $this->roomId=$roomId;
    }

    public function broadcastOn()
    {
        return new PresenceChannel('rooms.'.$this->roomId);
    }
  
    public function broadcastAs()
    {
       return 'nameOfEventRoomNotification';
    }
 
}

<?php

namespace  Phonglg\LaravelEchoServer\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserNotification implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        // dd($message);
        $this->user=$user;
        // dd($this->user);
    }

    public function broadcastOn()
    { 
        return new PrivateChannel('users.1');
    }
  
    public function broadcastAs()
    {
       return 'nameOfEventUserNotification';
    }
 
}

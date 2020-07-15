<?php

namespace App\Events;

use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ExampleEvent extends Event implements ShouldBroadcast
{

    public $message;
    public $code;

    /**
     * Create a new event instance.
     *
     * @param string $message
     */
    public function __construct(string $message)
    {
        $this->message = $message;
        $this->code = '4550';
    }

    public function broadcastOn()
    {
        return new PrivateChannel('orcas');
    }
}

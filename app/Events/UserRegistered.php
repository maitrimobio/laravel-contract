<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserRegistered
{
    use Dispatchable, SerializesModels;

    public $newuser;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($newUser)
    {
        $this->newuser = $newUser;
    }
}

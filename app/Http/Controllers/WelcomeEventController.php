<?php

namespace App\Http\Controllers;

use App\Events\UserRegistered;
use App\User;
use Illuminate\Http\Request;

class WelcomeEventController extends Controller
{
    // create object of User
    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /*
     * Calling Event with method.
     * @return array
     */
    public function display()
    {
        // passed value for sending mail.
        $user = [
            'name' => 'Maitri',
            'email' => 'maitris.mobio@gmail.com',
        ];
        //call Event with dispatch
        UserRegistered::dispatch($user);
    }
}

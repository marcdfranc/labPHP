<?php

namespace App\Listeners;

use App\Mail\NewAccess;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class LoginListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(Login $event)
    {
        info($event->user->email . " has loged.");

        // Mail::to($event->user)->send(new NewAccess($event->user));

        // Mail::to($event->user)->queue(new NewAccess($event->user));

        Mail::to($event->user)->later(now()->addMinute(3), new NewAccess($event->user));
    }
}

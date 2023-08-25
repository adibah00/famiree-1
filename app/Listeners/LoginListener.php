<?php

namespace App\Listeners;

use App\Events\LoginEvent;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class LoginListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(LoginEvent $event)
    {
        $time = Carbon::now()->toDateTimeString();
        $name = $event->name;
        $email = $event->email;

        DB::table('login_history')->insert([
            'name' => $name,
            'email' => $email,
            'created_at' => $time,
            'updated_at' => $time,
        ]);
    }
}

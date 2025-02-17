<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;

class UpdateLastLogin
{
    /**
     * Handle the event.
     *
     * @param  \Illuminate\Auth\Events\Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        // Mengupdate kolom last_login_at dengan waktu saat login
        $user = $event->user;
        $user->last_login_at = now(); // Menggunakan waktu saat ini
        $user->save();
    }
}

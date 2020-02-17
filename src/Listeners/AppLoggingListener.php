<?php

namespace Sun\Listeners;

use Illuminate\Support\Facades\Log;
use Illuminate\Log\Events\MessageLogged;

class AppLoggingListener
{
    /**
     * Handle the event.
     *
     * @return void
     */
    public function handle()
    {
        Event::listen(MessageLogged::class, function (MessageLogged $e) {
            //
        });
    }
}

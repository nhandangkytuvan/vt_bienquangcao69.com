<?php

namespace App\Listeners;

use App\Events\AccessWebEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AccessWebListener
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
     * @param  AccessWebEvent  $event
     * @return void
     */
    public function handle(AccessWebEvent $event)
    {
        $setting = $event->setting;
        $setting->web_visitday = $setting->web_visitday + 1;
        $setting->save();
    }
}

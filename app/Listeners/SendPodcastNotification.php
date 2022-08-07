<?php

namespace App\Listeners;

use App\Events\PodProcessed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendPodcastNotification
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
     * @param  \App\Events\PodProcessed  $event
     * @return void
     */
    public function handle(PodProcessed $event)
    {
        //
    }
}

<?php

namespace App\Listeners;

use App\Events\NewOrder;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class FirstListener
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
     * @param  NewOrder  $event
     * @return void
     */
    public function handle(NewOrder $event)
    {
        return true;
    }
}

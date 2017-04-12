<?php

namespace App\Listeners;

use App\Events\VisitPostEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Visit;
class VisitPostListener
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
     * @param  VisitPostEvent  $event
     * @return void
     */
    public function handle(VisitPostEvent $event)
    {
        $post_id = $event->post->id;
        if(Visit::where('post_id',$post_id)->exists()){
            $visit = Visit::where('post_id',$post_id)->first();
        }else{
            $visit = new Visit;
            $visit->post_id = $post_id;
        }
        $visit->visit_sum ++;
        $visit->save();
    }
}

<?php

namespace App\Listeners;

use App\Events\EmailTrigger;
use App\Mail\SiteReview;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
//log generate
use Illuminate\Support\Facades\Log;
//Email Sender
use Illuminate\Support\Facades\Mail;

class EmailSender
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
     * @param  SomeEvent  $event
     * @return void
     */
    public function handle(EmailTrigger $event)
    {
//        Log::info('Showing user profile for user: '.print_r($event, true));
        Mail::to("tiemann9898@gmail.com")->send(new SiteReview($event->user->user_ip));
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SiteReview extends Mailable
{
    use Queueable, SerializesModels;
    public $user_ip;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user_ip)
    {
       $this->user_ip = $user_ip;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('sitereview')
                        ->subject('New Siteviewer')
                        ->with([
                            'user_ip' => $this->user_ip,
            ]);
    }
}

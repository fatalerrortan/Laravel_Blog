<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class ContactMe extends Mailable
{
    use Queueable, SerializesModels;
    public $contact = array();
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//        Log::info($this->contact['message']);
//        NOT allow to use "message" als keyword (pre defined)
        return $this->view('contactme')
                        ->subject("New Contact Message")
                        ->with([
                            'name' => $this->contact['name'],
                            'email' => $this->contact['email'],
                            'contact_message' => $this->contact['contact_message']
                        ]);
    }
}

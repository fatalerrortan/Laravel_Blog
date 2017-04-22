<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use App\Newsletter;
use App\Posts;


class Newsletters extends Mailable
{
    use Queueable, SerializesModels;
    public $post;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Posts $post)
    {
        $this->post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        Newsletter::all(array('email'));
        return $this->view('newsletter')
            ->subject("Xulin got a new post for you!")
            ->with([
                'page' => 'Newsletter',
                'title' => $this->post->title,
                'subtitle' => $this->post->segment,
                'created_at' => $this->post->created_at,
                'keywords' => $this->post->keywords,
                'post_url' => "https://www.xulin-tan.de/post/".$this->post->id
            ]);
    }
}

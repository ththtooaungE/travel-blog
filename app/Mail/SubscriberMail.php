<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubscriberMail extends Mailable
{
    use Queueable, SerializesModels;

    public $blog;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($blog)
    {
        $this->blog = $blog;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.subscriber_mail')
            ->attach(public_path("/storage/".$this->blog->image),[
                'as'=>'blog_image.jpg',
                'mime'=>'application/jpg'
            ]); //I didn't pass the $blog because once the data is set to public property, it is accessable automatically in the views
    }
}

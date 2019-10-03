<?php

namespace Kazak71\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;


    public $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$sender,$sender_name)
    {
        $this->name = $name;
        $this->sender = $sender;
        $this->sender_name = $sender_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->sender, $this->sender_name)
                    ->view('contact::emails.contact');
    }
}

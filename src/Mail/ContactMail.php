<?php

namespace Tal7aouy\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $message;
    public $fullname;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message,$fullname)
    {
        $this->message = $message;
        $this->fullname = $fullname;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('talk::contact.email',['message'=>$this->message,'fullname'=>$this->fullname]);
    }
}

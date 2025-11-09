<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactus;

    public function __construct($contactus)
    {
        $this->contactus = $contactus;
    }

    public function build()
    {
        return $this->view('emails.contactus')
                    ->with('contactus', $this->contactus);
    }
}

<?php

namespace App\Mail;

use App\Email;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactRequestRecieved extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->to( env('MAIL_FROM_ADDRESS', 'Jay@jjintl.com') , env('MAIL_FROM_NAME', 'Jay'))
        ->subject('JJ International Contact Request')
        ->view('emails.contact.request-recieved');
    }
}

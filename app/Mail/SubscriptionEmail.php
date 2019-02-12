<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SubscriptionEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $notificaiton;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($notificaiton)
    {
        $this->notificaiton = $notificaiton;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('common.emails.subscription_email');
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactFormReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mails/contactFormReceived')
            ->to('befitbyash@outlook.com')
            ->subject('Nieuw contact formulier ontvangen')
            ->with([
                'name' => $this->data['name'],
                'subject' => $this->data['subject'],
                'message' => $this->data['message']
            ]);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegistrationSent extends Mailable
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
        return $this->markdown('mails/registrationSent')
            ->subject('Be fit by Ash heeft jouw inschrijving ontvangen')
            ->with([
                'email' => $this->data['email'],
                'name' => $this->data['name'],
                'phoneNumber' => $this->data['phoneNumber'],
                'address' => $this->data['adress'],
                'postalCode' => $this->data['postalCode'],
                'country' => $this->data['country']
            ]);
    }
}

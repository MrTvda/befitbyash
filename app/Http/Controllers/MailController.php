<?php

namespace App\Http\Controllers;

use App\Http\Requests\Mail\ContactFormRequest;
use App\Http\Requests\Mail\RegistrationFormRequest;
use App\Mail\ContactFormSent;
use App\Mail\ContactFormReceived;
use App\Mail\RegistrationReceived;
use App\Mail\RegistrationSent;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function SendContactMail(ContactFormRequest $req) {
        Mail::send(new ContactFormReceived([
            'name' => $req->name,
            'subject' => $req->subject,
            'message' => $req->message
        ]));

        Mail::to($req->email)->send(new ContactFormSent([
            'name' => $req->name,
        ]));

        return redirect()->back()->with('sent', 'Bedankt voor het contact opnemen wij nemen zo spoedig mogelijk contact met u op, u krijgt een bevestiging in uw mailbox.');
    }

    public function SendRegistrationMail(RegistrationFormRequest $req) {
        Mail::send(new RegistrationReceived([
            'email' => $req->email,
            'name' => $req->name,
            'phoneNumber' => $req->phoneNumber,
            'adress' => $req->address,
            'postalCode' => $req->postalCode,
            'country' => $req->country
        ]));
        
        Mail::to($req->email)->send(new RegistrationSent([
            'email' => $req->email,
            'name' => $req->name,
            'phoneNumber' => $req->phoneNumber,
            'adress' => $req->address,
            'postalCode' => $req->postalCode,
            'country' => $req->country
        ]));

        return redirect()->back()->with('sent', 'Bedankt voor de inschrijving wij nemen zo spoedig mogelijk contact met u op, u krijgt een bevestiging in uw mailbox.');
    }
}

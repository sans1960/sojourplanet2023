<?php

namespace App\Observers;
use App\Models\DestinationContact;
use Illuminate\Support\Facades\Mail;
use App\Mail\DestinationMail;

class DestinationContactObserver
{
    public function created(DestinationContact $contact): void
    {
        Mail::to($contact->email)->bcc('sojournplanet@gmail.com')->send(new DestinationMail($contact));
    }
}

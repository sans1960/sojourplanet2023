<?php

namespace App\Observers;
use App\Models\SightContact;
use Illuminate\Support\Facades\Mail;
use App\Mail\SightMail;

class SightContactObserver
{
    public function created(SightContact $contact): void
    {
        Mail::to($contact->email)->bcc('sojournplanet@gmail.com')->send(new SightMail($contact));
    }
}

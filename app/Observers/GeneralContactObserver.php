<?php

namespace App\Observers;
use App\Models\GeneralContact;
use Illuminate\Support\Facades\Mail;
use App\Mail\GeneralMail;

class GeneralContactObserver
{
    public function created(GeneralContact $contact): void
    {
        Mail::to($contact->email)->bcc('sojournplanet@gmail.com')->send(new GeneralMail($contact));
    }
}

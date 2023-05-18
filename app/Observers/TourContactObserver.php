<?php

namespace App\Observers;
use App\Models\TourContact;
use Illuminate\Support\Facades\Mail;
use App\Mail\TourMail;

class TourContactObserver
{
    public function created(TourContact $contact): void
    {
        Mail::to($contact->email)->bcc('sojournplanet@gmail.com')->send(new TourMail($contact));
    }
}

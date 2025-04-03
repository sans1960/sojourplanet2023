<?php

namespace App\Observers;

use App\Models\LandingContact;
use Illuminate\Support\Facades\Mail;
use App\Mail\LandingMail;

class LandingContactObserver
{
    /**
     * Handle the LandingContact "created" event.
     */
    public function created(LandingContact $contact): void
    {
        Mail::to($contact->email)->bcc('sojournplanet@gmail.com')->send(new LandingMail($contact));
    }

    /**
     * Handle the LandingContact "updated" event.
     */
    public function updated(LandingContact $landingContact): void
    {
        //
    }

    /**
     * Handle the LandingContact "deleted" event.
     */
    public function deleted(LandingContact $landingContact): void
    {
        //
    }

    /**
     * Handle the LandingContact "restored" event.
     */
    public function restored(LandingContact $landingContact): void
    {
        //
    }

    /**
     * Handle the LandingContact "force deleted" event.
     */
    public function forceDeleted(LandingContact $landingContact): void
    {
        //
    }
}

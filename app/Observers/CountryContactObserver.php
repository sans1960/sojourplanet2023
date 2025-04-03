<?php

namespace App\Observers;

use App\Models\CountryContact;
use Illuminate\Support\Facades\Mail;
use App\Mail\CountryMail;

class CountryContactObserver
{
    /**
     * Handle the CountryContact "created" event.
     */
    public function created(CountryContact $contact): void
    {
        Mail::to($contact->email)->bcc('sojournplanet@gmail.com')->send(new CountryMail($contact));
    }

    /**
     * Handle the CountryContact "updated" event.
     */
    public function updated(CountryContact $countryContact): void
    {
        //
    }

    /**
     * Handle the CountryContact "deleted" event.
     */
    public function deleted(CountryContact $countryContact): void
    {
        //
    }

    /**
     * Handle the CountryContact "restored" event.
     */
    public function restored(CountryContact $countryContact): void
    {
        //
    }

    /**
     * Handle the CountryContact "force deleted" event.
     */
    public function forceDeleted(CountryContact $countryContact): void
    {
        //
    }
}

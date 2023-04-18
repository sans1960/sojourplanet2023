<?php

namespace App\Observers;

use App\Models\ListContact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ListMail;

class ListContactObserver
{
    public function created(ListContact $listcontact): void
    {
        Mail::to($listcontact->email)->send(new ListMail($listcontact));
    }

}

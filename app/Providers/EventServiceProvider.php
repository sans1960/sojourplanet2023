<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Models\ListContact;
use App\Observers\ListContactObserver;
use App\Models\GeneralContact;
use App\Observers\GeneralContactObserver;
use App\Models\Contact;
use App\Observers\ContactObserver;
use App\Models\LandingContact;
use App\Observers\LandingContactObserver;
use App\Models\CountryContact;
use App\Observers\CountryContactObserver;
use App\Models\SightContact;
use App\Observers\SightContactObserver;
use App\Models\DestinationContact;
use App\Observers\DestinationContactObserver;
use App\Models\TourContact;
use App\Observers\TourContactObserver;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        ListContact::observe(ListContactObserver::class);
        GeneralContact::observe(GeneralContactObserver::class);
        CountryContact::observe(CountryContactObserver::class);
        Contact::observe(ContactObserver::class);
        LandingContact::observe(LandingContactObserver::class);
        SightContact::observe(SightContactObserver::class);
        DestinationContact::observe(DestinationContactObserver::class);
        TourContact::observe(TourContactObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}

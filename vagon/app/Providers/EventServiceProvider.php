<?php

namespace App\Providers;

use App\Events\NewOrderEvent;
use App\Events\ProductUpdatedEvent;
use App\Listeners\ProductSearchReindex;
use App\Listeners\SendOrderToAmoCrm;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        NewOrderEvent::class => [
            SendOrderToAmoCrm::class
        ],
        ProductUpdatedEvent::class => [
            ProductSearchReindex::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}

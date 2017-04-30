<?php

/*
 * This file is part of TeamWorker.
 *
 * (c) Alex Roden <b.r_alex@hotmail.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ABR\TeamWorker\Foundation\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

/**
 * This is the event service provider class.
 *
 * @author Alex Broom-Roden <b.r_alex@hotmail.co.uk>
 */
class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'ABR\TeamWorker\Events\Event' => [
            'ABR\TeamWorker\Listeners\EventListener',
        ],
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

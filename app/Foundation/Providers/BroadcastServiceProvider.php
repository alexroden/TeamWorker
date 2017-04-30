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

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

/**
 * This is the broadcast service provider class.
 *
 * @author Alex Broom-Roden <b.r_alex@hotmail.co.uk>
 */
class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();

        require base_path('routes/channels.php');
    }
}

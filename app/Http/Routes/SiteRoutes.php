<?php

namespace ABR\TeamWorker\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

/**
 * This is the site routes class.
 *
 * @author Alex Broom-Roden <alex@deepthoughlearning.com>
 */
class SiteRoutes
{
    /**
     * Defines if these routes are for the browser.
     *
     * @var bool
     */
    public static $browser = true;

    /**
     * Map the site routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
     *
     * @return void
     */
    public function map(Registrar $router)
    {
        $router->get('/', [
            'as'   => 'get:index',
            'uses' => 'SiteController@index',
        ]);
    }
}
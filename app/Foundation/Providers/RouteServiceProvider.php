<?php

namespace ABR\TeamWorker\Foundation\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RecursiveRegexIterator;
use RegexIterator;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'ABR\TeamWorker\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map(Router $router)
    {
        $router->group([
            'namespace' => $this->namespace,
        ], function (Router $router) {
            $path = app_path('Http/Routes');
            $directoryIterator = new RecursiveDirectoryIterator($path);
            $routeIterator = new RecursiveIteratorIterator($directoryIterator);
            $routes = new RegexIterator($routeIterator, '/^.+\.php$/i', RecursiveRegexIterator::GET_MATCH);
            foreach ($routes as $file) {
                $class = substr($file[0], strlen($path));
                $class = str_replace('/', '\\', $class);
                $class = substr($class, 0, -4);
                $routes = $this->app->make('ABR\\TeamWorker\\Http\\Routes'.$class);
                if ($routes::$browser) {
                    $this->mapWebRoutes($router, $routes);
                } else {
                    $this->mapApiRoutes($router, $routes);
                }
            }
        });
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes(Router $router, $routes)
    {
        $router->group([
            'middleware' => 'web',
        ], function (Router $router) use ($routes) {
            $routes->map($router);
        });
    }
    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes(Router $router, $routes)
    {
        $router->group([
            'middleware' => 'api',
            'prefix'     => 'api',
        ], function (Router $router) use ($routes) {
            $routes->map($router);
        });
    }
}

<?php

namespace Cms\Modules\Core;

use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{
    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'cms.guest' => RedirectIfAuthenticated::class,
    ];

    public function boot(Router $router)
    {
        // MODULE MIDDLEWARE REGISTER
        foreach ($this->routeMiddleware as $name => $class) {
            $router->aliasMiddleware($name, $class);
        }
        view()->composer(
            'Core::views.*', 'Cms\Modules\Core\ViewComposer'
        );
    }

    public function register()
    {

    }
}

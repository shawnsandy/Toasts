<?php

namespace ShawnSandy\Toasts;

use Illuminate\Support\ServiceProvider;
use ShawnSandy\Toasts\App\Toast;


/**
 * Class Provider
 *
 * @package ShawnSandy\PkgStart
 */
class ToastProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if (!$this->app->routesAreCached()) {
            include __DIR__ . '/App/routes.php';
        }


        /**
         * Package views
         */
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'toasts');
        $this->publishes(
            [
                __DIR__ . '/resources/views' => resource_path('views/vendor/toasts'),
            ], 'toasts-views'
        );

        $this->publishes(
          [__DIR__.'/public/' => public_path('/')], 'toasts-assets'
        );

        /**
         * Package config
         */
        $this->publishes(
            [__DIR__ . '/App/config/config.php' => config_path('toasts.php')],
            'toasts-config'
        );

        /**
         * Place commands that should run in console here
         * Includes, Database, etc
         */
        if (!$this->app->runningInConsole()) :
            include_once __DIR__ . '/App/Helpers/helper.php';
        endif;


    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {

       $this->mergeConfigFrom(
            __DIR__ . '/App/config/config.php', 'toasts'
        );

        $this->app->bind('Toast', function () {
                return new Toast();
            }
        );

    }
}

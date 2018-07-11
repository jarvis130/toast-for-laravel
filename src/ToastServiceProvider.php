<?php

namespace Biggold\Toast;

use Illuminate\Support\ServiceProvider;

class ToastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'Toast');

        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/vendor/toast'),
            __DIR__.'/config/toast.php' => config_path('toastr.php'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['toast'] = $this->app->share(function ($app) {
            return new Toast($app['session'], $app['config']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['toastr'];
    }
}

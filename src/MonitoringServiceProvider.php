<?php

namespace AvengersGroup;

use AvengersGroup\AbstractHandler;
use Illuminate\Support\ServiceProvider;

class MonitoringServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    protected $services = [
        AbstractHandler::class,
    ];

    /**
     *
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->services);
        $this->app->singleton(AppLoggingListener::class);
    }
}

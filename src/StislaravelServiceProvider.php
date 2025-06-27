<?php

namespace Kandita\Stislaravel;

use Illuminate\Support\ServiceProvider;

class StislaravelServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // 1. Register Blade views dari package
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'stislaravel');
        $this->loadViewsFrom(__DIR__ . '/public', 'stislaravel');

        // 2. Publikasi view dan assets ke proyek Laravel
        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views/'),
            __DIR__ . '/public' => public_path('vendor/stislaravel'),
        ], 'stislaravel');
    }

    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                \Kandita\Stislaravel\Console\InstallCommand::class,
            ]);
        }
    }
}

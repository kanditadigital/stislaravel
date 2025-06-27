<?php

namespace Kandita\Stislaravel;

use Illuminate\Support\ServiceProvider;

class StislaravelServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // 1. Register Blade views dari package
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'stislaravel');

        // 2. Publikasi view dan assets ke proyek Laravel
        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views/'),
            __DIR__ . '/public' => public_path('vendor/stislaravel'),
            __DIR__ . '/app/Http/Controllers' => app_path('Http/Controllers/'),
            __DIR__ . '/routes' => base_path('routes/')
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

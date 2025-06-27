<?php

namespace Kandita\Stislaravel;

use Illuminate\Support\ServiceProvider;

class StislaravelServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'stislaravel');

        // Optional: publish views to project
        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views/vendor/blade-template'),
        ], 'blade-template-views');
    }

    public function register()
    {
        //
    }
}

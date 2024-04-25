<?php

namespace Lucascudo\LaravelPtBRLocalization;

use Illuminate\Support\ServiceProvider;

class LaravelPtBRLocalizationServiceProvider extends ServiceProvider
{
    /**
    * Publishes translation files.
    *
    * @return  void
    */
    public function register()
    {
        $this->publishes([
            __DIR__ . '/pt_BR.json' => $this->app->langPath() . '/pt_BR.json',
            __DIR__ . '/pt_BR' => $this->app->langPath() . '/pt_BR'
        ], 'laravel-pt-br-localization');
    }
}

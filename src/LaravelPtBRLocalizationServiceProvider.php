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
            __DIR__ . '/pt-br.json' => $this->app->langPath() . '/pt-br.json',
            __DIR__ . '/pt-br' => $this->app->langPath() . '/pt-br'
        ], 'laravel-pt-br-localization');
    }
}

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
            __DIR__ . '/pt-BR.json' => $this->app->langPath() . '/pt-BR.json',
            __DIR__ . '/pt-BR' => $this->app->langPath() . '/pt-BR',
        ], 'laravel-pt-br-localization');
    }
}

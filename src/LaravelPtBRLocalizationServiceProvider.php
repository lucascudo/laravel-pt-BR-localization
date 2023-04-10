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
        $langPath = explode('.', $this->app->version())[0] > 8 ? '/lang' : '/resources/lang';
        echo $langPath;
        die($this->app->langPath());
        $this->publishes([
            __DIR__ . '/pt-BR.json' =>  $langPath . '/pt-BR.json',
            __DIR__ . '/pt-BR' => $langPath . '/pt-BR',
        ], 'laravel-pt-br-localization');
    }
}

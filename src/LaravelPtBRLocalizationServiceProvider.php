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
            __DIR__ . '/pt_BR.json' => lang_path('/pt_BR.json'),
            __DIR__ . '/pt_BR' => lang_path('/pt_BR'),
        ], 'laravel-pt-BR-localization');
    }
}

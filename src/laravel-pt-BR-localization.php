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
            __DIR__ . '/pt-BR' => resource_path('lang/pt-BR'),
        ], 'laravel-pt-br-localization');

        $this->publishes([
            __DIR__ . '/pt-BR.json' => resource_path('lang/pt-BR.json'),
        ], 'laravel-pt-br-localization');
    }
}

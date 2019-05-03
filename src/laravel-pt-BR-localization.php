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
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/pt-BR' => resource_path('lang/pt-BR'),
        ], 'laravel-pt-br-localization');
    }
}

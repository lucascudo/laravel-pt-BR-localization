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
            __DIR__ . '/pt_BR.json' => resource_path('lang/pt_BR.json'),
            __DIR__ . '/pt_BR' => resource_path('lang/pt_BR'),
        ], 'laravel-pt-br-localization');
    }
}

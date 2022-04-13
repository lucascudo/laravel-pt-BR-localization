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
        if (Str::substr(app()->version(), 0, 1) == 9) {
            $this->publishes([
                __DIR__ . '/pt-BR.json' => app()->langPath('lang/pt-BR.json'),
                __DIR__ . '/pt-BR' => app()->langPath('lang/pt-BR'),
            ], 'laravel-pt-br-localization');
        } else {
            $this->publishes([
                __DIR__ . '/pt-BR.json' => resource_path('lang/pt-BR.json'),
                __DIR__ . '/pt-BR' => resource_path('lang/pt-BR'),
            ], 'laravel-pt-br-localization');
        }
        
        
    }
}

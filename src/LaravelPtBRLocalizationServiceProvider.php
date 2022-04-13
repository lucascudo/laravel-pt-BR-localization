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
        $path_command = (substr(app()->version(), 0, 1) == 9 && app()->langPath) ? app()->langPath : resource_path;
        $this->publishes([
            __DIR__ . '/pt-BR.json' => $path_command('lang/pt-BR.json'),
            __DIR__ . '/pt-BR' => $path_command('lang/pt-BR'),
        ], 'laravel-pt-br-localization');
    }
}

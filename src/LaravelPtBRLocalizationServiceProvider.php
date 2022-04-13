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
        $path_command = 'resource_path';//(substr(app()->version(), 0, 1) > 8 && method_exists(app(), 'langPath')) ? app()['langPath'] : resource_path;
        $this->publishes([
            __DIR__ . '/pt-BR.json' => $path_command('lang/pt-BR.json'),
            __DIR__ . '/pt-BR' => $path_command('lang/pt-BR'),
        ], 'laravel-pt-br-localization');
    }
}

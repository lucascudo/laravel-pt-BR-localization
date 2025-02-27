# Módulo de linguagem pt-BR (português brasileiro) para Laravel

![example workflow](https://github.com/lucascudo/laravel-pt-br-localization/actions/workflows/master.yml/badge.svg) [![Total Downloads](https://poser.pugx.org/lucascudo/laravel-pt-br-localization/downloads)](https://packagist.org/packages/lucascudo/laravel-pt-br-localization) [![Latest Stable Version](https://poser.pugx.org/lucascudo/laravel-pt-br-localization/v/stable)](https://packagist.org/packages/lucascudo/laravel-pt-br-localization) [![License](https://poser.pugx.org/lucascudo/laravel-pt-br-localization/license)](https://packagist.org/packages/lucascudo/laravel-pt-br-localization)

## Instalação

1.  Scaffold do diretório lang

```shell
php artisan lang:publish
```

2.  Instale o pacote

```shell
composer require lucascudo/laravel-pt-br-localization --dev
```

3.  Publique as traduções

```shell
php artisan vendor:publish --tag=laravel-pt-br-localization
```

4.  Configure o Framework para utilizar 'pt_BR' como linguagem padrão

```
// Altere Linha 85 do arquivo config/app.php para:
'locale' => 'pt_BR'

// Para versões >= 11.x altere a linha 8 do arquivo .env
APP_LOCALE=pt_BR
```

## Versões do Laravel suportadas

-   12.x
-   11.x
-   10.x
-   9.x
-   8.x
-   7.x
-   6.x
-   ^5.6

### Para versões anteriores, consulte:

-   [Laravel 5.5](https://github.com/enniosousa/laravel-5.5-pt-BR-localization)
-   [Laravel 5.4](https://github.com/Leomhl/laravel-5.4-pt-br-localization)
-   [Laravel 5.3](https://github.com/leandroluk/laravel-5.3-pt-br-localization)
-   [Laravel 5.2](https://github.com/felipeporto/laravel-5.2-pt-br-localization)
-   [Laravel 5.1](https://github.com/bmonteirog/laravel-5.1-pt-br-localization)

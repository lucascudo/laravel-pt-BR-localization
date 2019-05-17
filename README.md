# Arquivos de linguagem em Português do Brasil (pt-BR) para Laravel >= 5.6

[![Total Downloads](https://poser.pugx.org/lucascudo/laravel-pt-br-localization/downloads)](https://packagist.org/packages/lucascudo/laravel-pt-br-localization) [![Latest Stable Version](https://poser.pugx.org/lucascudo/laravel-pt-br-localization/v/stable)](https://packagist.org/packages/lucascudo/laravel-pt-br-localization) [![License](https://poser.pugx.org/lucascudo/laravel-pt-br-localization/license)](https://packagist.org/packages/lucascudo/laravel-pt-br-localization)

## Instalação

1. Instalar o pacote
  ```shell
  $ composer require lucascudo/laravel-pt-br-localization
  ```
2. Publicar as traduções
  ```shell
  $ php artisan vendor:publish --tag=laravel-pt-br-localization
  ```
3. Configurar o Framework para utilizar 'pt-BR' como linguagem padrão
  ```
  // Altere Linha 83 do arquivo config/app.php para:
  'locale' => 'pt-BR',
  ```
## Versões do Laravel suportadas

* 5.8
* 5.7
* 5.6

## Localização para versões anteriores do Laravel 5
  
* [Laravel 5.5](https://github.com/enniosousa/laravel-5.5-pt-BR-localization)
* [Laravel 5.4](https://github.com/Leomhl/laravel-5.4-pt-br-localization)

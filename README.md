# Arquivos de linguagem em Português do Brasil (pt-BR) para Laravel >= 5.6

## Instalação
1. Clonar este repositório na pasta `resources/lang/` do seu projeto
  ```shell
  $ cd resources/lang/
  $ git clone https://github.com/lucascudo/laravel-pt-BR-localization.git pt-BR
  ```
  Faça checkout para versão desejada. Exemplo:
   ```shell
  $ cd pt-BR
  $ git checkout 5.8
  ```
  Você pode remover o diretório .git caso deseje incluir e versionar os arquivos deste projeto no seu repositório.

  ```shell
  $ rm -r .git/
  ```
2. Configurar o Framework para utilizar 'pt-BR' como linguagem padrão
  ```
  // Altere Linha 83 do arquivo config/app.php para:
  'locale' => 'pt-BR',
  ```
## Localização para outras versões do Laravel 5
  
* [Laravel 5.4](https://github.com/Leomhl/laravel-5.4-pt-br-localization)
* [Laravel 5.5](https://github.com/enniosousa/laravel-5.5-pt-BR-localization

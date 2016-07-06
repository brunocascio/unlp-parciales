# unXParciales

Aplicación usada en:
 * [UNLPParciales](https://github.com/brunocascio/unlp-parciales)

**Branches:**
  * Master: Producción
  * Develop: Desarrollo

## Como deployar?

Clonamos el repo

`mkdir unxparciales && cd $_ && git clone https://github.com/unXtests/web .`

Instalamos dependencias

`php composer.phar install`

Configuramos variables de entorno:

`mv .env.example .env && vim .env`

Instalamos la Instancia

`php artisan unx:install`

Para ejcutar el servidor de desarrollo local ejecutamos

`php artisan serve`


### Laravel PHP Framework Info

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

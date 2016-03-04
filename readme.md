# unXParciales

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

Generamos una app key. (ésto es para encriptación)

`php artisan key:generate`

Ejecutamos el servidor

`php artisan serve`


### Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

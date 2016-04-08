# UNLPParciales

# Requerimientos

Requiere los requerimientos de [Laravel 5.2](https://laravel.com/docs/5.2#server-requirements)

**Branches:**
  * Master: Producción
  * Develop: Desarrollo

## Como deployar?

Clonamos el repo

`git clone https://github.com/brunocasico/unlp-parciales && cd unlp-parciales`

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

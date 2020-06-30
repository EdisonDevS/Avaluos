# Avalúos

## Descripción
Pagina web para la generación automatizada de avalúos

## Definiciones


## Tecnologías usadas
  * [Laravel 7.X](https://laravel.com/docs/7.x/installation)
  * [Laravel Shift Blueprint](https://laravel-news.com/laravel-shift-blueprint)
  * [MySQL](https://www.mysql.com)
  * [TailWindCSS](https://tailwindcss.com)

## Requerimientos previos
  * [PHP 7.4.X](https://www.php.net/downloads)
  * [Composer](https://getcomposer.org)

## Insatalación del proyecto
### Clonar el repositorio
```
$ git clone https://github.com/EdisonDevS/Avaluos.git
```

### Instalar dependencias
```
$ cd Avaluos
$ composer install
```

## Configuración
### Base de datos y variables de entorno
Crear el fichero `.env` para el almacenamiento de las variables de entorno y conexión a la base de datos
```
$ cp .env.example .env
```
Una vez creado el fichero ingresar a el y configurar el usuario y contraseña de la base de datos a la cual se va a apuntar
### Generar una key
```
$ php artisan key:generate
```
Después de crearla validar que se haya incluido al inicio del fichero `.env`


## Iniciar servidor local
Para arrancar un servidor local
```
$ php artisan serve
```
Adicionalmente si se desea que este sea visible dentro de la red se puede agregar el parametro `--host=XXX.XXX.XXX.XXX` con la dirección IP de la maquina dentro de la red
```
$ php artisan serve --host=XXX.XXX.XXX.XXX
```

## Correr tests
Para correr los tests dentro del directorio raiz ejecutar
```
$ php artisan test
```

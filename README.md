# Silex/sail3skeleton
Este proyecto define una estructura de directorios para la creacion de aplicaciones web con el micro-framework [Silex](http://silex.sensiolabs.org/).
## Estructura de directorios.
* **app:** Archivos de la aplicacion.
* **bin:** Directorios de ejecutables.
* **public:** Archivos publicos de la aplicacion.
* **src:** Codigo de la aplicacion.
* **src/Controller:** Directorio para los controladores.
* **src/View/:** Directorio para las vistas.

## Archivos.
* **app/app.php:** Archivo de configuracion de la aplicacion.
* **bin/console:** Aplicacion de consola.
* **src/Controller/DefaultController:** Controlador por defecto de la aplicación.

## Uso.
Puede hacer un fork de este repositorio para poder crear sus aplicaciones.

Para instalar los vendors sitúese en el direcotorio raiz y ejecute el siguiente comando
```sh
composer install
```
Puede ver una prueba rapida del sitio utilizando el servidor embebido de php
```sh
php -s localhost:8000 public/index_dev.php
```
Para mas informacion acerca de los commandos utilizados visite: [Composer Documentation](https://getcomposer.org/doc/01-basic-usage.md) y [PHP documentation](http://php.net/manual/es/features.commandline.webserver.php)
## Licencia
MIT
#
_enjoy!!_

# Prueba Técnica

Construir una pequeña plataforma donde un usuario puede acceder, ver una lista de ofertas, y puede,
haciendo click sobre alguna de ellas, generar un código único que se guardará en la base
de datos y después puede revisar que códigos promocionales tiene en una página de
detalle. En la página de detalle, el usuario puede pulsar sobre un botón canjear código que
marcará como canjeado el código de la BBDD y confirmará al usuario que se ha canjeado.


## Instrucciones de uso:

1. Para clonar este proyecto en un repositorio local:

```bash
git clone https://github.com/Claudia1010/Laravel-Project-LFG.git
```

2. Instalar las dependencias necesarias incluidas en package.json

```bash
composer install
```

3. Crear la base de datos en local por ejemplo con MySQL Workbench.

4. Editar el archivo .env.example renombrandolo a .env. Para hacerlo desde la consola puedes usar cp .env.example .env, pero asegurate de que el archivo .env exista.
```
5. Edita el nombre de la base de datos y variables con los datos de la base de datos de Workbench que acabamos de crear, en el archivo .env

6. Migrar los modelos a la base de datos local

```bash
php artisan migrate
```

7. Para crear los registros en la base de datos usando seeders .Se crean con unos id determinados, de modo que se garantice que los métodos de autentificación que los usan funcionen correctamente.
```bash
php artisan db:seed
```

Dentro del proyecto, las rutas para todos los endpoints y sus requisitos de autenticación se encuentran en el archivo routes/web.php.

Si se usa en local, la raíz de las url es por defecto: http://localhost/"directorio_instalacion"

El usuario por defecto es juan@dominio.com contraseña:123456
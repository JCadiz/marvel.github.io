los insert de las tablas estan en la carpeta de dicho nombre
nota: las tablas de algunos insert tienen un error por comilla simple que tienen en unos de sus campos
para cargar los insert se recomienda usar mysql worchbench.

al clonar el repositorio ejecute por la terminar composer install
luego cambie el .env o cree una base de datos con el mismo nombre.

ejecute php artisan config:clear luego php artisan view:clear y por ultimo php artisan route:clear
para finalizar ejecute composer update.

corra el proyecto con php artisan serve.

lunes 18: atravez de el plugin de multiple-auth se hace mucho mas sencillo el login de multi usuario ya el proyecto carga las vistas para cada una de los posibles login y registro
pero tengo que resolver la carga de datos a la BBDD con el orm de laravel 


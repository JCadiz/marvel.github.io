los insert de las tablas estan en la carpeta de dicho nombre
nota: las tablas de algunos insert tienen un error por comilla simple que tienen en unos de sus campos
para cargar los insert se recomienda usar mysql worchbench.

al clonar el repositorio ejecute por la terminar composer install
luego cambie el .env o cree una base de datos con el mismo nombre.

ejecute php artisan config:clear luego php artisan view:clear y por ultimo php artisan route:clear
para finalizar ejecute composer update.

corra el proyecto con php artisan serve.

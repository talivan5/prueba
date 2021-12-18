# para poder instalar se debe clonar de repositorio
# git clone https://github.com/talivan5/prueba.git
# debemos realizar despues de la clonacion un composer install
# despues de eso debemos ejecutar php artisan key:generate
# para generar la llave
# despues de eso se debe realizar la configuracion de la base de datos
# En el archivo .env
# el cual debe realizar una clonacion o copia del archivo .env.example
# y modificar:
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=
# colocando el nombre de la base de datos, el usuario y la contrasena
# despues de eso se debe realizar la migracion y los seeder 
# con el comando php artisan migrate --seed
# antes debe crear una base de datos en mariadb
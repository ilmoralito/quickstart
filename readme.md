## Con el fin de iniciar se deben realizar los siguientes pasos

Crear el archivo .env en raiz del proyecto y agregar valores a los campos de acurdo a los criterios de tu sistema

DB_USERNAME

DB_PASSWORD

DEFAULT_USER_NAME

DEFAULT_USER_EMAIL

DEFAULT_USER_PASSWORD

En la raiz del proyecto ejecutar los comandos

    2.1 php artisan migrate # Creara la base de datos segun los parametros listados en el archivo .env

    2.2 php artisan db:seed # Crearar los datos de prueba

    2.3 php artisan serve # Ejecutara el servidor

    2.4 php artisan route:list # listara los endpoints


El endpoint raiz lista todos los datos de prueba y se accede atravez de

    3.1 loclahost:8000/api

Ahi se pueden tomar los datos para realizar consultas a los demas endpoints como se listan
en en el punto 2.4

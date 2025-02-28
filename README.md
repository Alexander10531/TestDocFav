# ¿Como levantar el proyecto?
## Unicamente se tiene que ejecutar los siguientes comandos
- Tener instalado composer para la instalacion de la paqueteria necesaria del servicio en PHP
- docker build -f sql/Dockerfile -t database-tag sql/
- docker build -f Docker/Dockerfile -t backend-application .
- docker-compose build 
- docker-compose up
- Para ejecucion de pruebas unitarias (Ejecutar en este orden para evaluar el caso de uso de Registro de usuarios): vendor\bin\phpunit tests

## Consideraciones: 
- Se utilizo php -S localhost:8080 index.php para hacer el levantamiento del servicio, sin embargo se recomienda para ambientes productivos el uso Nginx o Apache, esto se uso unicamente por motivos practivos y de depuracion de codigo. 
- Para realizar la simulacion del envio del correo segund lo solicitado se creo el patron DDD, sin embargo para tener una "salida" o una muestra puede ver el output que se muestra en los logs del contenedor ya sea mediante la consola que se abre al momento de ejecutar el comando "docker-compose up" o haciendo uso de los logs ahi podran ver una salida en consola similar a esta: [INFO] Se ha enviado el correo a AlexanderTejedaBarahona10@gmail.com
- Cualquier duda o consulta me encuentro a la entera disposicion de levantar una llamada y tratar de contestar cualquier inconveniente.

## Request
- Agregar el siguiente request a la siguiente ruta - http://localhost:8080/users: 
    {
	"user_name" : "Alexander Ismael Tejeda", 
	"email" : "AlexanderTejedaBarahona10@gmail.com", 
	"password" : "Contrasenia_123"
    }

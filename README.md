# Project Title

Prueba técnica

## Getting Started

Se recomienda utilizar WAMP Server para la ejecución del proyecto

### Prerequisites

PHP 7.2
MySQL Server 5.7
Composer 1.9
WAMP Server 3.1.9

### Installing

Crear una base de datos en MySQL Server con el nombre de test-mutuo
Crear un nuevo usuario en dicha base de datos
Clonar el repositorio en la carpeta www
Editar el archivo .env para agregar los datos de la BDD
Ejecutar el comando php artisan migrate para generar las bases de datos
Ejecutar el comando php artisan db:seed --class=test_user_seeder para cargar el usuario inicial

## Running the tests

Ejecutar desde Postman

Auth:
http://localhost:8080/test-mutuo/public/api/auth
{
    "status": true,
    "code": 200,
    "message": "OK",
    "result": "3480c940bd99"
}

Save:
http://localhost:8080/test-mutuo/public/api/save
{
	"token" : "3480c940bd99",
	"data" : [{
		"loan_id" : "2",
		"start_date" : "2019-01-01",
		"due" : "100000",
		"city" : "CDMX",
		"end_date" : "2019-12-31",
		"created_at" : "2019-12-05",
		"updated_at" : "2019-12-05"
	}]
}

Get:
http://localhost:8080/test-mutuo/public/api/get
{
	"token" : "3480c940bd99"
}

## Built With

* [Laravel](https://laravel.com/) - The web framework used
* [Composer](https://getcomposer.org/) - Dependency Management
* [MySQL](https://www.mysql.com/) - Database
* [Postman](https://www.getpostman.com/) - Test

## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [GitHub](https://github.com/M3M0/test-mutuo) for versioning. 

## Authors

* **Guillermo Cruz** - *Initial work* - [M3M0](https://github.com/M3M0)

## License

This project is licensed under the MIT License

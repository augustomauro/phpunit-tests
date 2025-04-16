### Iniciar composer (actual PHPUnit 12.1.2):

    composer init

/*NOTA: Veremos que nos devuelve una serie de opciones:*/

    Package name (<vendor>/<name>) [usuario/phpunit-test]:
    Description []: 
    Author [usuario <usuario@hotmail.com>, n to skip]: n
    Minimum Stability []: 
    Package Type (e.g. library, project, metapackage, composer-plugin) []: project
    License []:
    Would you like to define your dependencies (require) interactively [yes]? no
    Would you like to define your dev dependencies (require-dev) interactively [yes]? no

    Add PSR-4 autoload mapping? Maps namespace "Usuario\PhpunitTest" to the entered relative path. [src/, n to skip]: app/

    {
        "name": "usuario/phpunit-test",
        "type": "project",
        "autoload": {
            "psr-4": {
                "Usuario\\PhpunitTest\\": "app/"
            }
        },
        "require": {}
    }

    Do you confirm generation [yes]? yes

### Instalar phpunit como desarrollo (--dev):

    composer require --dev phpunit/phpunit

/*Nota: indicar que es --dev le dice a la app que en entornos productivos NO CARGE la dependencia de phpunit*/

### Verificar la version de phpunit instalada:

    ./vendor/bin/phpunit --version

#### AUTOLOAD

/*Autoload de clases*/
/*PSR-4 es el estandard para mapear namespaces con carpetas*/
/*Cada namespace se debe mapear con una carpeta, y las clases deben estar en archivos cuyo nombre coincida con el nombre de la clase*/

### Crear una carpeta para "test":

    md tests

### Editamos el psr-4 de composer.json:

    Modificar la linea:

    "psr-4": {
        "Usuario\\PhpunitTest\\": "app/"
    }

    Por:

    "psr-4": {
        "App\\": "app/",
        "Tests\\": "tests/"
    }

/*Esto le indica que el namespace "App" apunta a la carpeta real "app/" del proyecto y "Test" apunta a la nueva carpeta "tests/"*/

### Actualizamos el autoload mediante:

    composer dump-autoload

#### Aplicacion y tests:

/*Ver archivo tests/ExampleTest.php*/
/*Ver archivo tests/FactorialServiceTest.php*/

### Ejecutar tests:

    ./vendor/bin/phpunit tests

### Crear archivo de configuracion para phpunit:

    ./vendor/bin/phpunit --generate-configuration

/*Contestar las siguientes preguntas:*/

    Bootstrap script (relative to path shown above; default: vendor/autoload.php):
    Tests directory (relative to path shown above; default: tests):
    Source directory (relative to path shown above; default: src): app
    Cache directory (relative to path shown above; default: .phpunit.cache):

/*Modificar XML phpunit.xml para evitar el "code coverage", eliminando:*/

    requireCoverageMetadata="true"
    beStrictAboutCoverageMetadata="true"

/*Agregar colores a la consola:*/

    colors="true"



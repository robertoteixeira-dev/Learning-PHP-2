<?php
include __DIR__ . '/vendor/autoload.php';
use Teixeira\Week2\{Router};

/*
    Superglobals build variables that are always availanle
    within all scopes throughout your php code

$_SERVER
$_GET
$_POST
$_FILES
$_COOKIE
$_SESSION
$_REQUEST

$_ENV

*/

/*
# $_SERVER
    It contains the information about the server and 
execution environment

    We have several $_SERVE informations

    We use $_SERVER to build basic routing 

    index.php is the entrance to our application and
from the index.php we can decide what script to run
based on the requested url

    Routing allows us to structure the application in a
better way and in any way we want

    To create a routing we could use composer, a framework
or use mapped routes 

*/
// print_r($_SERVER);

# 1. We need to create a router class with a method to register the route

$router = new App\Router();

$router->register(
    '/', 
    function(){
    echo 'Home';
    /*
        This function part could be:
        [src\Classes\Home::class, 'index']

        Then, we should create a class called Home
        with public function index(): string {
            return 'Home';
        }

        The same would be done with the invoice
        $router
        ->register('/',[src\Home::class, 'index'])
        ->register('/invoices',[src\Invoice::class, 'index'])
        ->register('/invoices/create',[src\Home::class, 'create']);
    */
});

$router->register(
    '/invoices', 
    function(){
    echo 'Invoices page';
});

echo $router->resolve($_SERVER['REQUEST_URI']);




/*
SUPERGLOBAIS - EM PORTUGUÊS

São variaveis que são sempre acessíveis 
e pode pode acessar em qualquer lugar

$GLOBALS 
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION

*/

//GLOBALS

$a = 10;
$b = 15;

function soma(){
    $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
}
//No caso go GLOBALS, há uma maneira mais fácil que é:
//global $a, $b, $c;

soma();
echo $c;

/* $_SERVER 
É uma variável que contém informações sobre
o cabeçário da requisição, sobre os caminhos, 
os locais de script e etc
*/

//Mostrar o caminho pro propio arquivo
echo $_SERVER['PHP_SELF']; 

//Mostrar o nome do servidor, nesse caso localhost
echo $_SERVER['SERVER_NAME']; 

//Mostrar o nome do servidor, nesse caso localhost
echo $_SERVER['HTTP_HOST']; 

//Mostrar o endereço remoto, endereço de IP
echo $_SERVER['REMOTE_ADDR']; 

//Mostrar informações sobre quem está acessando nossa página
echo $_SERVER['HTTP_USER_AGENT']; 

//VER TUDO QUE JÁ TEM NO _SERVER
foreach ($_SERVER as $key => $value) {
    echo "<strong>$key</strong> : $value <br>";
}



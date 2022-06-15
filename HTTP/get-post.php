<?php

/*
    The requests can come from Front end (JavaScript), 
    thir party APIs, Mobile Apps, Forms etc.

    # When should we use GET requesT?
        whenever you're retrieving the data or viewing something.
    (data fetching). However if you need to store data or make 
    changes to it then get requests should not be used. 
    # POST
        The data is appended in the query string but instead
    its submitted within the body of the http request. So
    its hidden frm the url but can be accessed when inspecting
    the request
    # Updating data?
        Use POST Request

    action="" method=""

    $_REQUEST
        It contains all the data from the get and post as well as
        the data from the cookie superglobal. It's not very used

    request_order $ variables_order

*/

/*
APPLAYING ON THAT CLASS FROM THE SUPERGLOBAL VIDEO

### ON THE PHP FILE
    instead of the register, put get and post
    ->get('/', )
    ->post('/', )

### ON THE INVOICE CLASSES

public function index(): string {
    return 'Invoices';
}

public function create(): string {
    return '<form action="/invoices/create" method="post"><label>Amount</label></form>

}

public function store(){
    $amount = $_POST['amount'];

    var_dump($amount);
}

### ON THE ROUTER CLASSES

public function register(string $requestMethod, string $route, callable|array $action): self {
    $this->routes[$requestMethod][$route] = $action;
    return $this;
}

public function get(string $route, callable|array $action): self {
    return $this->register('get', $route, $action);
}

public function post(string $route, callable|array $action): self {
    return $this->register('post', $route, $action);
}

public function routes(): array {
    return $this->routes;
}

 public function resolve(string $requestUri, string $requestMethod){
        $route = explore('?', $requestUri)[0];

        $action = $this->routes[$requestMethod][$route] ?? null;

        if(!$action){
            throw new RouteNotFoundException();
        }

        if (\is_callable($action)){
            return call_user_func($action);
        }

        if (is_array($action)){
            [$class, $method] = $action;

            if(method_exists($class, $method)){
                return call_user_func_array([$class, $method], []);
            }
        }

        throw new RouteNotFoundException();
        
    }
### ON THE INDEX.PHP (superglobals.php)

    ->post('/invoices/create', [src\Invoice::class, 'store']);

    echo $route->resolve($_SERVER['REQUEST_URI'], strlower($_SERVER['REQUEST_METHOD']));

*/


?>


<?php
/*
$_GET

Utilizamos para pegar informações do 
cabeçário HTTP da minha página, ou seja, 
na URL da página

Por exemplo, para pegar um nome 
localhost/Learning PHP/get.php?nome=Roberto

//CODIGO USADO PARA EXEMPLO
<body <?php if($nome=="Roberto") { echo "style='background:green; color:white;'";} ?>>

*/
?>

<?php
/*
//É necessário sempre fazer essa verificação no inicio 
if (isset($_GET['nome'])){
    $nome = htmlspecialchars($_GET['nome']);
}else{
    $nome = "Mundo!";
}

if (isset($_GET['cor'])){
    $cor = htmlspecialchars($_GET['cor']);
}else{
    $cor = 'white';
}

//Eu posso usar o comando htmlspecialchars para evitar que alguém possa colocar um código malicioso na minha url


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <h1>Olá <?php echo $nome; ?></h1>
    
    <a href="get.php?nome=Roberto&cor=green">Ir para Roberto</a><br>
    <a href="get.php?nome=Vitor&cor=blue">Ir para Vitor</a><br>
    <a href="get.php?nome=Jorge&cor=pink">Ir para Jorge</a><br>


</body>
</html>
*/
?>

<?php
//UTILIZANDO GET COM FORMULÁRIOS
if ( isset($_GET['nome']) && isset($_GET['idade']) ) {
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];

    echo "<h1>O nome é $nome e a idade é $idade </h1>";
}

//Eu posso criar um arquivo chamado recebe_get.php e colocar após o method="get" action="recebe_get.php"
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>

    <form method="get">
        <input type="text" name="nome" placeholder="Digite seu nome aqui"><br>
        <input type="text" name="idade" placeholder="Digite sua idade aqui"><br>
        <button type="submit">Enviar</button>
    </form>

    
</body>
</html>

<?php

/*
$_POST - Enviar informações

Nesse método a informação não fica 
vizivel na URL

No method eu coloco post e no action
eu não coloco nada pois ele vai enviar
para a mesma página

Mas tbm posso criar uma pagina para receber
a informação do action

É necessário ter alguns cuidados com a segurança:
- combater o SQL injections e o XSS que
é uma tentativa de manipular um código

*/


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>

    <form method="post" action="recebe-post.php">
        <input type="text" name="nome" placeholder="Digite seu nome aqui"><br>
        <input type="text" name="idade" placeholder="Digite sua idade aqui"><br>
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>
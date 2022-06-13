<?php
require('db/conexao.php');
/*
### INSERIR UM DADO DENTRO DO NOSSO BANCO (Modo Simples)
$sql2 = $pdo2->prepare("INSERT INTO clientes VALUES (null,'Roberto','roberto@gmail.com','09-06-2022')");
$sql2->execute();


# É importante evitar o SQL INJECTION 
    É uma prática que hackers fazem que inserem no formulario
    onde ele fecha uma aspa e passa outro comando, por exemplo
    pra deletar nosso banco

    Precisamos fazer queries preparadas

### MODO CORRETO ANTI-SQL INJECTION 
$nome = "Rangel";
$email = "rangel@gmail.com";
$data = date('d-m-Y');

$sql2 = $pdo2->prepare("INSERT INTO clientes VALUES (null,?,?,?)");
$sql2->execute(array($nome, $email, $data));


### AGORA VAMOS INSERIR DE MANEIRA DINAMICA ATRAVÉS DE UM FORMULÁRIO
    1. Cria o formulário HTML
    2. Agora faz a conexão
*/

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserindo Dados</title>
    <style>
        table{
            border-collapse: collapse;
            width:100%;
        }
        th,td{
            padding:10px;
            text-align:center;
            border:1px solid #ccc;
        }
        </style>
</head>
<body>
    <h1>Aula Inserindo Dados</h1>
    <form method="post">
        <input type="text" name="nome" placeholder="Digite seu nome" required>
        <input type="email" name="email" placeholder="Digite seu email" required>
        <button type="submit" name="salvar">Salvar</button>
    </form>

    <?php
    if (isset($_POST['salvar']) && isset($_POST['nome']) && isset($_POST['email'])){
    
        $nome = limparPost($_POST['nome']);
        $email = limparPost($_POST['email']);
        $data = date('d-m-Y');
    
        //Agora vamos sanitizar os dados que vem 
    
        //VALIDAÇÃO DE CAMPO VAZIO
            if($nome == "" || $nome == null){
                echo "Nome não pode ser vazio";
                exit();
            }
        //VALIDAÇÕES DE EMAIL
            if($email == "" || $email == null){
            echo "Nome não pode ser vazio";
            exit();
            }
        //VERIFICAR SE NOME ESTÁ CORRETO
        if (!preg_match("/^[a-zA-Z-' ]*$/",$nome)) {
            echo "Only letters and white space allowed";
            exit();
        }
        //VERIFICAR SE É UM EMAIL VALIDO
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
            exit();
        }
    
        $sql2 = $pdo2->prepare("INSERT INTO clientes VALUES (null,?,?,?)");
        $sql2->execute(array($nome, $email, $data));
    
        echo "Cliente inserido com sucesso!";
    }
    
        //FUNÇÃO PARA SANITIZAR DADOS
        function limparPost($dado){
        $dado = trim($dado);
        $dado = stripslashes($dado);
        $dado = htmlspecialchars($dado);
        return $dado;
    }
    ?>

    <br>

    <?php
    #### SELECT 
        //Selecionar dados da tabela
    
        $sql = $pdo2->prepare("SELECT * FROM clientes");
        /*
            Para selecionar algum em especifico
            "SELECT * FROM clientes WHERE id = ?"
            $id = 3;
            $sql2->execute(array($id));
        */
        $sql->execute();
        $dados = $sql->fetchAll(); //Pra puxar todas as informações e por em um array
        
        if(count($dados ) > 0){
           echo "<table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>";

            foreach($dados as $key => $valor){
                echo 
                    "<tr>
                        <th>".$valor['id']."</th>
                        <th>".$valor['nome']."</th>
                        <th>".$valor['email']."</th>
                    </tr>";
            }
            echo "</table>";

        }else{
            echo "Nenhum cliente cadastrado";
        }
    ?>
   
</body>
</html>





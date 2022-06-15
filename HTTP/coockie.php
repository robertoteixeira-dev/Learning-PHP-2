<?php

/*
COOKIES 
    São pequenos arquivos incorporados pelo servidor no computador
    do usuário. Servem para trocar dados entre o navegador do usuário
    e o servidor da página que o criou. 

    Os cookies tem prazo de validade. O cookie ficará disponível pelo
    tempo que o desenvolvedor do site definir. Portanto, se o cookie 
    estiver válido, ou seja, disponível, ele poderá ser acessado em 
    seu código mesmo que o cliente feche o navegador ou desligue
    o computador. 

    Imagine que voce ta num ecommerce e vai colocando os items no
    carrinho, mas ai voce decide fechar a página. No outro dia
    quando voce decide voltar pra página, o carrinho ainda está
    com os items que voce escolheu. Como ele sabia disso se voce
    fechou o navegador e nao tinha nenhum tinha de cadastro? 
        Através do cookie. O cookie amazena um pequeno arquivo
        que fica no navegador do usuário com as informações que
        ele quer salvar. Quando entramos novamente no site, o cookie
        verifica as informações armazenadas. 

SINTAXE
    # Criar cookie / Modificar / Deletar
    seetcookie(nomeChave, valor, prazoDeValidade)

    #Para pegar o valor Cookie
        $_COOKIE['nomeChave']

    NÃO DEVEMOS armazenar nos coockies dados sensiveis do 
    usuário como senha, nome de usuário e etc. Devemos 
    armazenar coisas como preferencias do usuário, items
    de um carrinho

    Para deletar um cookie também se faz com o setcookie, porém
    no tempo colocamos um valor negativo

*/

### CRIAR UM COOCKIE PARA SALVAR UM NOME
// 86400 segundos = 1 dia
setcookie('nome', 'Roberto',time()+(86400 * 30));

//Em configurações no seu navegador voce pode ver os coockies que tem no seu navegador
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Coockies: Recuperar um valor</h1>

    <?php
    if (isset($_COOKIE['nome'])){
        $nome = $_COOKIE['nome'];

        echo "O nome é ".$nome;
    }else{
        echo "Não tem nenhum cookie";
    }
    ?>

</body>
</html>


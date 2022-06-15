<?php
session_start();

$_SESSION["nome"] = "Roberto";
$_SESSION["profissao"] = "Developer";

//Now go to teste-session.php

session_unset(); //vai limpar a session

/*
SESSIONS
    Uma sessão é basicamente uma forma de armazenar variáveis e 
    compartilhar elas entre todas as páginas do seu site, enquanto
    o navegador estiver aberto ou até o usuário ficar inativo.

    Parecido com o conceito de cookies, mas ela não cria um arquivo.
    A sessão fica ativa apenas durante o uso. Fechou o navegador
    ou destruiu a sessão, ela se encerra.

    SINTAXE

    Se a pessoa fecha a aba, continua ativa. Mas se fecha o navegador
    ela se encerra.

    # Para iniciar uma session:
        session_start()
            Isso precisa estár abaixo do <?php 
    
    # Para criar uma variavel de session
        criar / modificar variavel de sessao
        $_SESSION["nome"] = "Roberto";
        $_SESSION["profissao"] = "Developer";

    # Para remover todas as variaveis de sessao:
        session_unset(); ou $_SESSION = array();

    # Para destruir a sessao:
        session_destroy();

    Normalmente usamos session para áreas restritas
        Por exemplo, quando a pessoa fez login podemos ter uma session
        login que estará true
    
*/






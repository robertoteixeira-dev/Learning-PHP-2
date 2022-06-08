<?php

/*
    Ocorrência anormal que afeta o funcionamento da aplicação
    Exception é a classe base para todas Exceptions
    message, code, file, line

*/

class Newsletter {
    public function cadastrarEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            //Agora a gente lança a exceção
            throw new Exception("Este email é invalido", 1);
        }else{
            echo "Email cadastrado com sucesso!";
        }
    }

}

$newsletter = new Newsletter();
//Agora precisamos tratar a exceção utilizando o try catch
//php Exceptions.php
try{
$newsletter->cadastrarEmail("contato@");
}catch(Exception $e) {
    echo "Mensagem: ".$e->getMessage()."\n\n";
    echo "Código: ".$e->getCode()."\n\n";
    echo "Linha: ".$e->getLine()."\n\n";
    echo "File: ".$e->getFile()."\n\n";
}

















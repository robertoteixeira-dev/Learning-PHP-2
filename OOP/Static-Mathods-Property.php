<?php

/*
    Com métodos estáticos, não precisamos mais instanciar
    a classe, Basta apenas por:
        Login::verificaLogin();
    Para atribuir um valor a propiedade também basta por:
        Login::$user = "admin";
    O $this NÃO FUNCIONA com membros ESTÁTICOS
        self::$user
*/

class Login {
    public static $user;

    public static function verificaLogin() {
        echo "O usuário".self::$user." está logado";
    }

    //Eu posso criar outros métodos 

}





?>
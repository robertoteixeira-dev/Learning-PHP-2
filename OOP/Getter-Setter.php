<?php

class Login {
    private $email;
    private $senha;
    private $name;

    public function __construct($email, $senha, $nome) {
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function setEmail($email){
        //Nos podemos filtrar o Email para proteger
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;

    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function getNome(){
        return $this->nome;
    }

    public function Logar(){
        if($this->email == "teste@teste.com" and $this->senha == "123456"){
            echo "Logado com sucesso!";
        }else{
            echo "Dados inválidos";
        }
    }
}

// $logar = new Login();
/*
    o Método CONSTRUCT é inicializado quando fazemos
    o new Login.  Ele é uma função, um método.

    Com isso, podemos passar o valor diretamente
    ao criar o objeto
*/

$logar = new Login("teste@teste.com", "123456", "Roberto");

/* 
    Passando os atributos fora da classe:

$logar->email = "teste@teste.com";
$logar->senha = "123456";
$logar->logar();

    Só conseguimos fazer isso porque as propiedades
    estão publicas, mas se estivessem privadas, não 
    seria possível.  

    Não é bom colocar dessa maneira. 
    Por isso temos os Getter e Setter
    Um irá setar um valor ao atributo e o outro
    vai pegar esse valor
*/

$logar->setEmail("teste@teste.com");
$logar->setSenha("123456");
$logar->logar();









?>
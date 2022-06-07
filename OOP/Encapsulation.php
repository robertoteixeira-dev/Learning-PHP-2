<?php

/*
    Os 3 pilares da POO são:
        (Também há Abstração, mas 
        alguns autores colocam dentro
        de Encapsulamento)
        Encapsulamento
        Herança
        Polimorfismo

ENCAPSULAMENTO
    To enclose within a capsule
    Restriction of access to an objects internal

    Uma pilha, uma capsula

    Protege o código e o usuário

    Ocultar partes independentes da 
    implementação, permitindo construir
    partes invisiveis ao mundo exterior

    Você manda mensagens para a capsula

    Um bom objeto encapsulado possui interface

    Interface é uma lista de serviços fornecidos
    por um componente. É o contato com o mundo
    exterior, que define o que pode ser feito com
    um objeto dessa classe

    O correto é criar atributos privados
    e criar métodos get e set para acessar
    e editar os dados da classe

    Se definimos como privado, não podemos fazer
    atribuições diretas. Temos que usar o método
    set 


    MÉTODOS ESPECÍFICOS 
        Servem para filtrar e proteger nossos dados
        Pois, por exemplo, ao criar um método
        idade, mesmo colocando int, o usuário ainda 
        pode colocar um número negativo
            private function validaIdade(int $idade){
                //Faz um condicional para ver se 
                é maior que 0 e menos que 120, por 
                exemplo
            }
            Após isso passo esse método no meu 
            construtor $this->validaIdade($idade);
        
        Porém eu tenho que proteger esse método também
        Se tenho um método especifico, ela precisa ser
        private

    Sometimes we can make the method public for 
    an internal reason
        Framework @api
        Or we can change it 


*/

class Person {
    public function __construct($name){
        $this->name = $name;
    }

    public function job(){

    }

    public function favoriteTeam(){

    }

    private function secrets(){
        //Things that should be private
    }

}

$bob = new Person('Bob');






?>
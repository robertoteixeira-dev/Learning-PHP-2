<?php

/*
# Open-Closed Principle
    Classes, entidades ou funções devem estar ABERTAS
    para EXTENSÇÃO, mas FECHADAS para MODIFICAÇÃO

    Imagine uma abstração para pagamento por cartao
    - inicialmente é pra credito
    - depois vem debito, mas é parecido
    - porem, logo vem boleto. Agroa ficou complicado
    - Voce nao pode alterar a classe principal, pois 
    ela deve estar fechada para modificação. 
    - Voce deve ter um nivel de abstração correto
    - A abstração ProcessaPagamentos(instrumento) 
    deveria apenas verificar se o instrumento é 
    valido e cobrar

    ORM - banco de dados com o código

    Pense em plugins 
    voce nao precisou ir no chrome.exe para alterar a
    funcionalidade

    Entities should be open for extension but closed
    for modification

    It should be simple to change the BEHAVIOR of
    an class, for example

    Its a goal, its not something simple to follow
    everytime

    Change behavior without modifying source code

    Avoid code rot

    # How to apply?
        Separate extensible behavior behind an interface 
    and flip the dependencies

    interface PaymentMethodInterface {
        public function acceptPayment($receipt);
    }

    class CashPaymentMethod implements PaymentMethodInterface{
        //Implement the function
    }

    class Checkout {
        public function begin(Receipt $receipt, PaymentMethodInterface $payment){
            $payment->acceptPayment();
        }
    }

*/





/*

Um exemplo de algo que pode ser usado em outra situação

 if ($shape instanceof Square){
        Add the way it would be calculated
    }

    if (is_a($shape, 'Square)){
        Add the way it would be calculated
    }


*/





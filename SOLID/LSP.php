<?php

/*
# Liskov Substitution Principle LSP
    Se a gente tem uma classe, e dela criarmos uma 
    subclasse usando herança, o objeto dessa subclasse
    tem que conseguir substituir o objeto da classe
    principal

    Ou seja, a classe filho consegue utilizar
    os metodos da classe pai

    A abstrações estarao no nivel certo e ser 
    mais consistente

    Classe pai Ave()
    - bicar
    - voar

    Classe filho PicaPau()
    - consigo usar bicar e voar

    Porem, se voce criar uma classe Pinguin
    como vai ter o metodo voar?

    Por isso, a classe pai deve ter o necessário

    Nao faça subclasses terem um comportamento
    nao esperado, pois vai gerar exceções

    Objetos de uma subclasse podem ser substituidos 
    por objetos de sua super classe

    PRE-REQUISITOS PARA UTILIZAR SUBCLASSES
        1. Contravariância: O tipo de parametro de 
        método de uma classe filha, ela pode ser 
        mais generica que o do pai
        2. Exceptions com herança: Caso os métodos 
        da classe pai não tenham nenhuma exceção,
        eles precisam ser respeitados pela classe
        filho
        3. Pre-Condição
        4. Invariancia 

    Derived classes must be substitutable for their base
    classes

    If something accepts the parent class, it should
    also accepts the child class
    
    1. Signature must match
    2. Preconditions can't be greater
    3. Post conditions at least equal to
    4. Exceptions types must match


*/







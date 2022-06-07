<?php

/*
INTERFACE
    Serve para definirmos um modelo que será utilizado
    por outras classes.
    Definimos o método, mas sem implementar
    Em interface não temos propiedades, mas podemos
    ter parametros nos métodos

    Para utilizar, usamos:
        implements

*/

interface Crud {
    public function create($data);
    public function read();
    public function update();
    public function delete();
}

class Noticias implements Crud {
    public function create($data){

    }
    public function read(){

    }
    public function update(){

    }
    public function delete(){

    }
}






?>
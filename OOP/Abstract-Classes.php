<?php

/*
    A classe abstrata serve como um modelo para as
    classes filhas. 

    Nos podemos criar métodos abstratos para obrigar
    as classes filhas a terem os mesmos métodos

    It provides a template for a subclass
    You declare the method but without the implementation

*/

abstract class Banco {
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    //Método abstrato não possui um corpo, pois isso será feito na classe filha
    abstract protected function Sacar($s); 

    abstract protected function Depositar($d);

    //Nos também podemos ter outros métodos
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    public function getSaldo(){
        return $this->saldo;
    }

}

class Itau extends Banco {
   
    public function Sacar($s) {
        $this->saldo = $this->saldo - $s;
        //Poderia ser: $this->saldo -= $s;

        echo "<hr> Sacor: ".$s;
    }

    public function Depositar($d) {
        $this->saldo += $d;
    }
}

class Bradesco extends Banco {
    
    public function Sacar($s) {
        echo "Sacando";
    }

    public function Depositar($d) {
        echo "Depositando";
    }
}

$itau = new Itau();
$itau->setSaldo(1000);
echo "<hr> Saldo: ".$itau->getSaldo();

$itau->Sacar(250);
echo $itau->getSaldo();

?>
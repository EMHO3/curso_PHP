<?php

class Myclass{
    //formas de declarar las propiedades
    public $propiedad_publica="parque";
    protected $propiedad_protected="protected";
    private $propiedad_privada="privada"; //solo se puede acceder desde la clase en donde esta no se puede heredar.
    //metodos para poder ver las prop private y protected
    function printHello()  {    
        echo $this->propiedad_publica."<br>";
        echo $this->propiedad_protected."<br>";
        echo $this->propiedad_privada."<br>";
    }
}

$objeto=new Myclass;
echo $objeto->propiedad_publica;
// echo $objeto->propiedad_protected;
 echo "<br>";

$objeto->printHello();
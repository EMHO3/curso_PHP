<?php

class Persona{
    public $nombre,$edad;
    public $apellido1,$apellido2;
    // public function __construct($nombre,$apellido,$edad)
    // {
    //     $this->nombre=strtolower($nombre);
    //     $this->nombre=strtolower($apellido);
    //     $this->edad=strtolower($edad);
    // }


    //FORMA EN LA QUE ENVIAMOS LOS DATOS setNombrefuncion
    public function setNombre($nombre){
        $this->nombre=strtolower($nombre);
    }

    //controlar como devolvemos los datos getNombrefuncion
    public function getNombre(){
        return ucwords( $this->nombre);
    }

    public function setApellidos($apellido1,$apellido2)  {
        $this->apellido1=$apellido1;
        $this->apellido2=$apellido2;
    }

    public function getApellidos()  {
        return $this->apellido1. " " . $this->apellido2;
    }

}


//usamos EXTENDS para heredar propiedades y metodos de la clase padre
class Peruano extends Persona{
    public $sueldo,$ciudad;
}



class Chileno extends Persona{
    public $poblaciob,$presidente;
    //metodo del ijo
    public function setApellidos($apellido1,$apellido2)  {
        $this->apellido1=$apellido2;
        $this->apellido2=$apellido1;
    }
}
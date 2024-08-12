<?php
//es un tipo especial de clase que no se puede instanciar(crear nuevos objetos) 
//directamente. Es decir, no puedes crear un objeto de una clase 
//abstracta. En cambio, una clase abstracta está destinada a ser 
//heredada por otras clases que implementan (o completan) los métodos 
//definidos en ella.
abstract class ClaseAbstracta{
    abstract protected function getValor();
    abstract protected function ValorPrefijo($prefijo) ;
        
    public function imprimir(){
        echo $this->getValor();
    }
    
}

class ClassConcreta extends ClaseAbstracta{
    protected function getValor(){
        return "clase concreta";
    }
    protected function ValorPrefijo(){
        
    }
}
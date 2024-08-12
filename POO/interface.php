<?php
//una interfaz en PHP define qué métodos debe tener una clase, pero 
//no dice cómo deben funcionar. Cualquier clase que quiera "seguir el manual" 
//(implementar la interfaz) debe asegurarse de tener esos métodos con los mismos nombres y parámetros,
interface Itempalte{
    public function setVariable();
    public function getHtml();
}

//si usas implements debes nombrar todos los metodos del padre 
class Template implements Itempalte{
    public function setVariable()
    {
        
    }
    public function getHtml()
    {
        
    }
}

interface a{
    public function a1();
}
interface d {
    public function d1();
}

//esta interface tiene 2 metodos y extiende de 2 interfaces
interface b extends a,d{
    public function c();
}
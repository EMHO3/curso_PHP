<?php
require_once ('Persona.php');

//creamos una nueva instancia es decir rear un nuevo objeto basado en una clase definida.
$persona1= new Persona("victor rail","huancaya flores",29);//esto para cuando nuestra clase tenga un public function _construct
// $persona1->nombre="victor rail";
// $persona1->edad=25;

$persona2= new Persona("brenda rail","perez flores",29);
//$persona2->setNombre('HECTOR SALAMANCA');
//$persona2->edad=25;

$persona3= new Persona("yasuri rail","davila flores",29);
//$persona3->setNombre('Hernan Cortez');
//$persona3->edad=25;

$persona4= new Persona("styuasd rail","brenda flores",29);
//$persona4->setNombre('HECTOR SALAMANCA');
//$persona4->edad=25;

echo $persona1->nombre. "<br>";
echo $persona2->getNombre(). "<br>";
echo $persona3->nombre. "<br>";

$persona5=new Peruano;

$persona5->setApellidos("Brenda","Cabdre");
$persona5->setNombre("rosario cortez");


$chileno=new Chileno;
$chileno->setApellidos("andres","hurtado");
var_dump($persona5)."<br>";
var_dump($chileno)."<br>";
echo $persona5->getApellidos()."<br>";
echo $chileno->getApellidos()."<br>";
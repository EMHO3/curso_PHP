<?php
// ESTRUCTURA de SELECCION MULTIPLE MATCH en PHP
/*match (expression) {
     => ,
     => ,
}*/

$edad=31;
$resultado=match (true) {
    $edad>=60 =>"Eres de la tercera edad" ,
    $edad>=30 =>"Eres un adulto joven" ,
    $edad>=18=> "Eres joven aun",
    default => "Usted es menor de edad"
};

echo $resultado;
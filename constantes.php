<?php
//¿Que es y como DECLARAR una CONSTANTE en PHP?
define("NOMBRE","pedro");
//NO SE PUEDE MODIFICAR UNA CONSTANTE   
//define("NOMBRE",7);
//la forma mas nuevo
const EDAD=13;
define("animales",array("perro","cocodrilo","pato",7));
echo NOMBRE;
echo EDAD;
echo animales[1];
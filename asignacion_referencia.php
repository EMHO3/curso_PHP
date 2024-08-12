<?php
//ASIGNACION por REFERENCIA en PHP

$texto="Paraguay";

$variable_1=$texto;
$variable_2=&$texto;//le estamos diciendo que tendra el valor de $texto y se puede cambiar
echo $variable_2;
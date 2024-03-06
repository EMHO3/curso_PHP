<?php
//ASIGNACION por REFERENCIA en PHP

$texto="Paraguay";
$variable_1=$texto;
$variable_2=&$texto;
echo $variable_2;
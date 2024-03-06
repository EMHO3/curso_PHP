<?php
$fecha1="2021/4/02";
$fecha2="2021-11-5";
$numeros="uno Dos Tres Cuatro Cinco Seis";

// Como CONVERTIR un STRING en ARREGLO (ARRAY) en PHP
//explode(delimitador,string,limitador(opcional));

$array_fecha=explode("/",$fecha1);
echo $array_fecha[0]."<br>";

$array_fecha2=explode("-",$fecha2);
echo $array_fecha2[1]."<br>";

$array_numeros=explode(" ",$numeros);
echo $array_numeros[3]."<br>";

//con limitador separa el array en partes

$array_numeros2=explode(" ",$numeros,3);
echo $array_numeros2[2];
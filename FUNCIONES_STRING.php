<?php
// FUNCIONES para FORMATEAR STRINGS a MAYUSCULAS & MINUSCULAS

$texto="Esto Es uN tEXto DE  ejmplo";
echo "<br>";
//la mayoria pa los metodos de string comienzan con str
//convertimos las letras a minusculas
echo strtolower($texto);
echo "<br>";

//convertimos las letras a mayusculas
echo strtoupper($texto)."<br>";

//convertimos la 1era letra a mayusculas
echo ucfirst($texto)."<br>";

//convertimos la 1era letra de cada palabra a mayusculas
echo ucwords($texto)."<br>";

//convierte una cadena en un array
//para ver el array hace falta poner: print_r
$str = "Hello Friend";

$arr1 = str_split($str);
$arr2 = str_split($str, 3);

print_r($arr1)."<br>";
print_r($arr2)."<br>";


$letras="12345678";
$gampi=str_split($letras);
print_r($gampi)."<br>";










// FUNCIONES para CONTAR CARACTERES y PALABRAS de un STRING
$cadena_texto="soy un Texto de Ejemplo";
echo $cadena_texto."<br>";

//para contar los caracteres
echo strlen($cadena_texto)."<br>";

//contar las palabras
echo str_word_count($cadena_texto);

<?php
// FUNCIONES para FORMATEAR STRINGS a MAYUSCULAS & MINUSCULAS

$texto="Esto Es uN tEXto DE  ejmplo";
echo "<br>";

//convertimos las letras a minusculas
echo strtolower($texto);
echo "<br>";

//convertimos las letras a mayusculas
echo strtoupper($texto)."<br>";

//convertimos la 1era letra a mayusculas
echo ucfirst($texto)."<br>";

//convertimos la 1era letra de cada palabra a mayusculas
echo ucwords($texto)."<br>";











// FUNCIONES para CONTAR CARACTERES y PALABRAS de un STRING
$cadena_texto="soy un Texto de Ejemplo";
echo $cadena_texto."<br>";

//para contar los caracteres
echo strlen($cadena_texto)."<br>";

//contar las palabras
echo str_word_count($cadena_texto);

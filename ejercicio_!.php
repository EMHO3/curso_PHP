<?php
$colores=[
    'negro'=>0,
    'marron'=>1,
    'rojo'=>2,
    'naranja'=> 3,
    'amarillo'=> 4,
    'verde'=> 5,
    'azul'=> 6,
    'violeta'=> 7,
    'gris'=> 8,
    'blanco'=> 9,

];




echo $colores['marron'];
echo "<br>";

$palabra="lavacalola";
$palabraInvertida=strrev($palabra);

echo $palabraInvertida;
echo "<br>";

function diferencia($numero){
    $suma =$numero *($numero+1)/2;
    $cuadradodelasuma=$suma**2;

    $sumadecuadrados=$numero*($numero+1)*(2*$numero +1)/6;

    $diferencia=$cuadradodelasuma-$sumadecuadrados;
    return $diferencia;
}

$numero=10;
echo diferencia($numero);
echo "<br>";



function codigoAletoreo(){
    $letras="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numero="123456789";

    $letrasaletoreas='';
    for ($i=0; $i <3 ; $i++) { 
        $letrasaletoreas.=$letras[rand(0,strlen($letras)-1)];
    }

    $numeroAletorio='';
    for ($i=0; $i <3 ; $i++) { 
        $numeroAletorio.=$numero[rand(0,strlen($numero)-1)];
    }

    $codigo=$letrasaletoreas.$numeroAletorio;
    return $codigo;
}

echo "Codigo generado"  .codigoAletoreo();
echo "<br>";






function numeroAmstrong($numero2)  {
    $digito=str_split($numero2);
    $numerodedigitos=count($digito);
    $suma=0;
    foreach ($digito as $dig) {
        $suma=$suma+$dig**$numerodedigitos;
    }
    return $suma==$numero2;

}

$numero2=rand(0,1000000);
if (numeroAmstrong($numero2)) {
    echo "El numero es Amstrong";
}else{
    echo "El numero no es Amstrong";
}


echo "<br>";



function conversor($dolar)  {
    $sol=$dolar*3.40;
    return $sol;
}
$dolar=152;
echo conversor($dolar);

echo "<br>";





$texto="PeSCaDo";
$minuscula=strtolower($texto);
$sinespacio=str_replace(' ','',$minuscula);
$reves=strrev($sinespacio);
if($minuscula==$reves){
    echo "El texto es palindromo";
}else{
    echo "El texto no es palindromo";
}


echo "<br>";





$año=rand(1000,2024);
if ($año%4==0 && $año%100!==0) {
    echo "El año es bisiesto";
}elseif($año%400==0){
    echo "El año es bisiesto";
}else{
    echo "El año no es bisiesto";
}

echo "<br>";

$ladoA=rand(1,90);
$ladoB=rand(1,90);
$ladoC=rand(1,90);

if ($ladoA===$ladoB&& $ladoB=== $ladoC) {
    echo "el triangulo es equilatero";
}else if($ladoA!==$ladoB &&$ladoB!==$ladoC &&$ladoC!==$ladoA){
    echo "el triangulo es escaleno";
}else {
    echo "el triangulo es isoceles";
}


echo "<br>";
$numeral=rand(0,100);

if ($numeral%3==0 && $numeral%5==0 && $numeral%7!==0) {
    echo "plinplang";
}elseif($numeral%3!==0 && $numeral%5==0 && $numeral%7==0){
    echo "plangplong";
}elseif($numeral%3==0 && $numeral%5!==0 && $numeral%7==0){
    echo "plingplong";
}elseif($numeral%3==0 && $numeral%5==0 && $numeral%7==0){
    echo "plingplangplong";
}else{
    echo "$numeral";
}

echo "<br>";
echo bindec(1100110);
echo "<br>";


function Primo($numeral2){
    if ($numeral2<2) {
        return false;
    }
    for ($i=2; $i <$numeral2 ; $i++) { 
        if ($numeral2%$i===0) {
            return false;
        }
    }
    return true;
}

$numeral2=rand(0,800);
if (Primo($numeral2)) {
    echo $numeral2 . " es primo";
}else{
    echo $numeral2 . " no es primo";
}

echo "<br>";



$n=15;

for ($i=0; $i <$n ; $i++) { 
    $cuadrado= $i**2;
    echo $cuadrado . " ";
}
echo "<br>";

echo str_shuffle("nopuedeserdiosmio");


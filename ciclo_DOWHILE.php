<?php
//Como USAR el CICLO DO WHILE en PHP (EJEMPLOS)
/*do {
    # code...
} while ($a <= 10);*/

$c=1;
do {
    echo $c."<br>";
    $c++;
} while ($c <= 20);
 

//CRECIENTE
$a=1;
$numer=5;
do {
    echo $numer. " X ".$a." = ".$numer*$a ."<br>";
    $a++;
} while ($a <=12 );

//DECRECIENTE
$a=12;
$numer=8;
do {
    echo $numer. " X ".$a." = ".$numer*$a ."<br>";
    $a--;
} while ($a >=1 );



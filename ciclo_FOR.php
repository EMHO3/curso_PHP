<?php
//Como USAR el CICLO FOR en PHP
 /*for ($cualquiernobre=0; $cualquiernobre < ; $cualquiernobre++) { 
    # code...
 }*/

 /*for ($perro=0; $perro <=20 ; $perro++) { 
    echo $perro."<br>";
 }

 for ($gato=20; $gato >=1 ; $gato--) { 
    echo $gato."<br>";
 }*/

 if (isset($_POST['numero'])&& $_POST['numero']!="") {
   $numero=9;
   for ($i=1; $i <12 ; $i++) { 
    echo $numero." X ".$i." = ". $i*$numero."<br>";
   }
 }else{
   echo "No definida";
 }
 
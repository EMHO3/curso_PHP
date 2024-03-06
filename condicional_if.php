<?php
 //ESTRUCTURA CONDICIONAL SIMPLE (IF) 
  if (1>=0) {
    echo "Expresion verdadera";
  }

  //estructuras cuando trabajas con HTML y PHP
  if (1>=0): 
    echo "Expresion verdadera";
  endif; 

  //ejmplos
  $x=22;
  if ($x>=18) {
    echo"Usted es mayor de edad";
  }

  $compra=250;
  if ($compra>=100) {
    $resultado=$compra-($compra*0.20);
    echo "el total a pagar es de: $".$resultado;
  }
  
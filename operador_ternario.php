<?php
 //¿Que es y como FUNCIONA el OPERADOR TERNARIO en PHP?
 (9>7)? $total=10*7 :$total=10*5;
 echo $total;
 
 //ejemplos
 $camisas=7;
 $precio=10;

 $total=$camisas*$precio;
 $total=($camisas>=3)? $total-($total*0.20): $total-($total*0.10);
 echo "el total a pagar es: $".$total;
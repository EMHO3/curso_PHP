<?php
//FORMATEAR NUMERO o CANTIDADES de DINERO en PHP
//number_format(cantidad,decimales,sep_decimal,sep_millar)

$dinero1=14502.122;
$dinero2=2678.810;

echo number_format($dinero1,2)."<br>";
echo number_format($dinero2,2,".","  ");



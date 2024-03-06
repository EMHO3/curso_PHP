<?php
//Como OBTENER la HORA y FECHA ACTUAL en PHP solo en el formato ingles
date_default_timezone_set("America/Lima");

//https://www.php.net/manual/es/function.date.php

$fecha_us =date("Y-m-d");
echo $fecha_us."<br>";

$fecha_latina=date("d-m-Y");
echo $fecha_latina."<br>";

$hora_12=date("h:i:a");
echo $hora_12."<br>";

$hora_24=date("H:i");
echo $hora_24;
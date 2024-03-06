<?php
//Como USAR el CICLO FOREACH(iterar valores de SOLO LOS ARRAYS) en PHP
/*foreach ($variable as $key => $value) {
    # code...
}*/

$laptop=["Acer nitro 10","window 10","AMD Ryzen 5","SSD 250GB","RAM 24GB"];

$frutas=[
    "fresas"=>100,
    "Peras"=>30,
    "uvas"=>25,
    "Melones"=>54,
    "Cocos"=>47
];

$productos=[
    ["codigo" => "A001","descripcion" => "mouse"],
    ["codigo" => "A002","descripcion" => "monitor"],
    ["codigo" => "A003","descripcion" => "teclado"],
    ["codigo" => "A004","descripcion" => "tarjeta"]
];

foreach ($laptop as $kvalor) {
    echo $kvalor."<br>";
}

foreach ($laptop as $chavo=> $kvalor) {
    echo $chavo." - ".$kvalor."<br>";
}

foreach ($frutas as $gato) {
    echo $gato."<br>";
}

foreach ($frutas as $kiko=>$ñoño) {
    echo "Hay ".$ñoño." ".$kiko." "."<br>";
}

foreach ($productos as $prod) {
    echo $prod["codigo"]."<br>";
}

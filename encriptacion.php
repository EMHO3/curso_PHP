<?php
//Como ENCRIPTAR una CONTRASEÑA o CLAVE en PHP (HASH en PHP)

$clave="contrasena1478";
echo hash("md5",$clave)."<br>";
echo md5($clave)."<br>";

foreach (hash_algos() as $algoritmos) {
    echo $algoritmos." - ".hash($algoritmos,$clave)."<br>";
}


echo password_hash($clave,PASSWORD_DEFAULT)."<br>";

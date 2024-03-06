<?php
//array fr tipo escalar
$estudiantes=array("carlos",
"pepe",
"Koki",
874
);

$estudiantes[2]="claudio";

//array de tipo asociativo
$tutor=[
    "nombre"=>"Ptolomeo",
    "apellido"=>"segundo",
    "edad"=>23
];

echo $estudiantes[2];
echo $estudiantes[3];
echo $tutor["nombre"];

//Array de multiples dimensiones
$tutor2=[
    "nombre"=>"valeria",
    "apellido"=>"salvador",
    "edad"=>20,
    "cursos"=>["php",
    "phyton",
    "css"]
];

echo $tutor2["cursos"][0];
echo count($estudiantes);

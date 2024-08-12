<?php
//Como CREAR y USAR FUNCIONES PROPIAS en PHP (con PARAMETROS)
/*function FunctionName($parametros) {    
    codigo
}*/

function saludo () {
    echo "loapdsksd"."<br>";
}
saludo();


function suma($x){
    echo $y=$x+12;
    echo"<br>";
}
suma(12);


function primo($numero){
    for ($divisot=0; $divisot <=$numero ; $divisot++) { 
        if($numero%2==0){
            return false;
        }
    }
    return true;
}
$numero=22;
if (primo($numero)) {
    echo "el  numero :$numero es primo";
}else{
    echo "el numero: $numero no es primo"; 
}

echo "<br>";
function promedio_alumno($nota_1,$nota_2,$nota_3) {
    $promedio=($nota_1+$nota_2+$nota_3)/3;
    return $promedio;
}
echo "el promedio es : ".promedio_alumno(17,10,18);



<?php
//SABER si una VARIABLE esta VACIA o DEFINIDA con isset() | empty()
$numero="";
// para eliminar una variable se usa:unset($variable)

if(is_null($numero)){
    echo "Es nula"."<br>";
}else{
    echo "No es nula"."<br>";
}

//as vacia cuando hay 0 o ""
$algo=0;
if(empty($algo)){
    echo "Es vacia"."<br>";
}else{
    echo "No esta vacia"."<br>";
}


//isset comprueba si una variable esta definida y no es null
$pato=null;
if(isset($pato)){
    echo "Es definida"."<br>";
}else{
    echo "No esta definida"."<br>";
}

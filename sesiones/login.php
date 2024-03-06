<?php
//simulando un inicio de sesion
    if($_POST['usuario']=="carlos"&&$_POST['clave']=="123456"){
        $_SESSION['Nombre']="carlos";
        $_SESSION['Apellido']="leandres";
        $_SESSION['Pais']="Uruguay";
        echo "Sesion iniciada";
    }else{
        echo "Datos incorrectos";
    }
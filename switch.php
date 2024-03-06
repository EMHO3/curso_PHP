<?php
//ESTRUCTURA de SELECCION MULTIPLE SWITCH en PHP
    /*switch ($variable) {
        case 'value':
            # code...
            break;
        
        default:
            # code...
            break;
        }*/

    $fruta="uva";
    switch ($fruta) {
        case "Manzana":
            echo "escogiste una manzana";
            break;
        case "Platano":
            echo "escogiste un platano";
        default:
            echo "no escogiste ni manzana ni platano";
            break;
    }    
    

    $dia=71;
    switch ($dia) {
        case 1:
            echo "Lunes";
            break;
        case 2:
            echo "Martes";
            break;
        case 3:
            echo "Miercoles";
            break;        
        case 4:
            echo "Jueves";
            break;
        case 5:
            echo "Viernes";
            break;
        case 6:
            echo "Sabado";
            break;
        case 7:
            echo "Domingo";
            break;              
        default:
            echo "Usted no escogio un numero entre 1 y 7";
            break;
    }
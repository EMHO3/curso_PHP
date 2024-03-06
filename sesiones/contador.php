<?php
//MANEJO de SESIONES en PHP con VARIABLES de $_SESSION (EJEMPLO)

//cambiando en nombre del cookie de la sesion
//session_name("CON");

//modificando el id
session_id("PHP");
session_start();

$_SESSION['contador']=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "has recargado esta pagina ".$_SESSION['contador']." veces"; ?>
    <br><br>
    <a href="indes.php">Inicio</a>
    <br>
    <a href="cerrar.php">Eliminar Sesion</a>
</body>
</html>
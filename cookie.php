<?php
/*setcookie(" Nombre",valor,expiracion,dir,dominio,secure,
httppnly);*/
//para eliminar una cookie le ponemos un tiempo negativo 
//setcookie("Idiona","es",time()-60 "/","localhost",false,false);

                        //timepoo de duracion
setcookie("Idiona","es",time()+60*60*24*30, "/","localhost",false,false);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKIES</title>
</head>
<body>
    <h1><?php echo $_COOKIE['Idiona'];?></h1>
    
</body>
</html>
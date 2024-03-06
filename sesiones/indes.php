<?php
session_id("LOGIN");
session_start();
if (isset($_SESSION['contador'])) {
    $_SESSION['contador']++;

}else {
    $_SESSION['contador']=1;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br>
    <form action="login.php" method="POST">
        <label>Usuario</label>
        <input type="text" name="usuario">
        <br><br>
        <label>Contraseña</label>
        <input type="password" name="clave">
        <button type="submit">Login</button>
    </form>   
    
</body>
</html>
<?php
//SUBIR o ENVIAR ARCHIVOS a SERVIDOR PHP con FORMULARIOS
echo $_FILES['fichero']['name']."<br>";
echo $_FILES['fichero']['tmp_name']."<br>";
echo $_FILES['fichero']['type']."<br>"; //tipo de archivo que estamos enviando
echo $_FILES['fichero']['error']."<br>";//si ah cargado bien o no el archiv
echo $_FILES['fichero']['size']."<br>";//tamaño del archivo en bytes
<?php

// En PHP, un try-catch se utiliza para manejar excepciones, que 
// son errores o situaciones anormales que ocurren durante la 
// ejecución de un script. La estructura try-catch te permite "
// atrapar" esas excepciones y manejarlas de una manera controlada 
// en lugar de que el script falle de manera abrupta.


// Casos de uso comunes:
//     Conexión a bases de datos: Manejar errores de conexión o consultas fallidas.
//     Acceso a archivos: Manejar errores cuando un archivo no se encuentra o no es accesible.
//     Operaciones que pueden fallar: Cualquier operación que dependa de recursos externos, 
//     como API externas, servicios web, o incluso entradas de usuario.

// Clase personalizada para manejar excepciones de archivos
class FileException extends Exception {}

try {
    // Intentar abrir un archivo
    $filename = 'archivo_inexistente.txt';
    
    // Verificar si el archivo existe antes de intentar abrirlo
    if (!file_exists($filename)) {
        throw new FileException("El archivo '$filename' no existe.");
    }

    // Intentar abrir el archivo
    $file = fopen($filename, "r");
    
    if (!$file) {
        throw new FileException("No se pudo abrir el archivo '$filename'.");
    }
    
    // Leer el contenido del archivo
    $content = fread($file, filesize($filename));
    echo "Contenido del archivo:\n$content";
    
    // Cerrar el archivo
    fclose($file);

} catch (FileException $e) {
    // Manejar la excepción específica de archivos
    echo "Error: " . $e->getMessage();
} catch (Exception $e) {
    // Manejar cualquier otra excepción
    echo "Se produjo un error inesperado: " . $e->getMessage();
}
echo "<br>";



try {
    //codigo que pueda lanzar una excepcion
    echo'anets de la excepcion';
    echo "<br>";

    throw new Exception('Excepcion lamnzada');
    echo "<br>";

    echo'Este codigo no se ejecutara';
    echo "<br>";
} catch (\Throwable $th) {
    //cuando atrapamos la excepcion podemos manejarlo
    //-PERO ES MUY IMPORTANTE HACER ALGO UTIL pq si 
    //si silenciamos los errores puede dar lugar 
    //a bugs dificiles de encontrar

    echo "entro al catch";
    echo "<br>";
}

echo "sigue la ejecucion";



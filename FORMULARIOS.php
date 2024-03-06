<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="indexado.php" method="POST">
       
        
        <label for="asignatura">Asignatura</label>
        <select id="asignatura" name="asignatura[]" multiple>
            <option value="Ingles">Ingles</option>
            <option value="Matematicas">Matematicas</option>
            <option value="Ciencia">Ciencia</option>
            <option value="lenguaje">lenguaje</option>
        </select>   
        
        <br><br>

        <label for="option-1">
            <input type="checkbox" value="manzana" id="option-1" name="frutas[]">Manzana
        </label>
        <label for="option-2">
            <input type="checkbox" value="pera" id="option-2" name="frutas[]">Pera
        </label>
        <label for="option-3">
            <input type="checkbox" value="uva" id="option-3" name="frutas[]">Uva
        </label> 
        <br><br><br>
        <button type="submit">Enviar</button>
        
    </form>    
    
</body>
</html>
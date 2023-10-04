<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructura de formularios</title>
</head>
<body>
    <form method="post" action="http://localhost:124/Laboratorio05/Operaciones_Gaseosas.php">
        Ingrese precio de la gaseosa:      
        <input type="text" name="precioGaseosa"><br>
        Total de unidades a comprar:<br>    
        <input type="text" name="unidades"><br>

        <input type="submit" name = "calcular" value = "Calcular">
        <input type="reset" name = "Cancelar" value = "Cancelar">
    </form>
</body>
</html>
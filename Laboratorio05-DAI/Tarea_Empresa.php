<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructura de formularios</title>
</head>
<body>
    <form method="post" action="http://localhost:124/Laboratorio05/Operaciones_Empresa.php">
        Nombre del trabajador:      
        <input type="text" name="nombre"><br>
        Total de hijos del trabajador:<br>    
        <input type="text" name="totalHijos"><br>
        Total vendido del mes:<br>
        <input type="text" name="comision"><br>

        <input type="submit" name = "calcular" value = "Calcular">
        <input type="reset" name = "Cancelar" value = "Cancelar">
    </form>
</body>
</html>
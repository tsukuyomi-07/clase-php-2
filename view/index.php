<?php
include "../config/db.php";
$conexion->query("SELECT * FROM Products");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>listado de pruductos</h1>
    <button><a href="create.php">Registrar</a></button>
    <table border="1">
        <thead>
            <th>Producto</th>
            <th>Precio</th>
            <th>Estado</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Eliminar</th>

        </thead>


        <tbody>
            <td><?= $_REQUEST['product']?></td>
            

        </tbody>
    </table>

    


    </form>
    
</body>
</html>
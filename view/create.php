<?php
include "../config/db.php"
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
<h1>Ingrese los datos del Producto</h1>
<button><a href="../view/index.php">inicio</a></button>
<form action="../model/save.php" method="post">
    <label>Producto</label>
    <input type="text" name="product">

    <label>Descripcion</label>
    <input type="text" name="description">

    <label>Precio</label>
    <input type="text" name="price">

    <button type="submit">Guardar</button>
    
</form>
    
</body>
</html>
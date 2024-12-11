<?php 
include "../config/db.php";
$product = $conexion->query("SELECT * FROM products WHERE id = '$_REQUEST[id_show]'")->fetch_object();
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
    <h1>Producto seleccionado</h1>
    
    <p>Nombre producto:  <?= $product->product?> </p>
    <p>Descripcion: <?= $product->description?> </p>
    <p>Precio:   <?= $product->price?> </p>
    
    <button><a href="../view/index.php">inicio</a></button>
</body>
</html>
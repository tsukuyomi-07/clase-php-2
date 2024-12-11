<?php
include "../config/db.php";

$product = $conexion->query("SELECT * FROM products WHERE id = '$_REQUEST[id_edit]'")->fetch_object();

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

<h1>Editar producto existente</h1>

<form action="../model/update.php" method="post">
<label >Editar nombre del producto</label>
<input type="text" name="product" id="product" value="<?=$product->product?>">

<label for="">Editar la descripcion</label>
<input type="text" name="description" id="description" value="<?=$product->description?>">

<label for="">Editar el precio</label>
<input type="text" name="price" id="price" value="<?=$product->price?>">

<label for="">Editar estado</label>
<input type="text" name="status" id="status" value="<?=$product->status?>">

<button type="submit">Guardar cambios</button>


</form>
    
</body>
</html>
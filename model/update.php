<?php

include "../config/db.php";

$conexion->query("UPDATE products SET
product = '$_REQUEST[product]',
description ='$_REQUEST[description]',
price ='$_REQUEST[price]',
status = '$_REQUEST[status]'
WHERE id ='$_REQUEST[id_edit]'");

header("location:../view/index.php");

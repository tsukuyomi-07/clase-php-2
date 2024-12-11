<?php

include "../config/db.php";

$conexion->query("UPDATE products SET
product = '$_REQUEST[product]',
description ='$_REQUEST[description]',
price ='$_REQUEST[price]',
status = '$_REQUEST[status]'
");

header("location:../view/index.php");

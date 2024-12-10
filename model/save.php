<?php

include "../config/db.php";

$product = $_REQUEST['product'];
$description = $_REQUEST['description'];
$price = $_REQUEST['price'];



$conexion->query("INSERT INTO products VALUES(NULL,'$product','$description','$price', NULL )");

header("location:../view/index.php");
?>
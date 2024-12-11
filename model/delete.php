<?php

include "../config/db.php";

$delete = $conexion->query("DELETE FROM products WHERE id = '$_REQUEST[id_delete]' ");

if($delete){
    header("location:../view/index.php");
}


<?php

include "../config/db.php";

$delete = $conexion->query("DELETE FROM products WHERE id = '$_REQUEST[id_delete]' ");


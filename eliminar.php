<?php

include("conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM envios WHERE id=$id";

mysqli_query($conn,$sql);

header("Location:index.php");

?>
<?php

$host = "mysql-alemont.alwaysdata.net";
$user = "alemont";
$pass = "clase1234";
$db = "alemont_mensajeriaalejo";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>
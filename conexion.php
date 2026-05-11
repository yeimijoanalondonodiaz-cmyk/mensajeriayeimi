<?php

$host = "mysql-yeimi.alwaysdata.net";
$user = "yeimi";
$pass = "yeimi0611*";
$db = "yeimi_mensajeriayeimi";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>
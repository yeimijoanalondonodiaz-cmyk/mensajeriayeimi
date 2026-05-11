<?php include("conexion.php"); ?>

<?php
if(isset($_POST['guardar'])){

    $destinatario = $_POST['destinatario'];
    $direccion = $_POST['direccion'];
    $descripcion = $_POST['descripcion'];

    $sql = "INSERT INTO envios(destinatario,direccion,descripcion)
    VALUES('$destinatario','$direccion','$descripcion')";

    mysqli_query($conn, $sql);

    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h1>Nuevo Envío</h1>

<form method="POST">

<input type="text" name="destinatario" placeholder="Destinatario">

<input type="text" name="direccion" placeholder="Dirección">

<textarea name="descripcion" placeholder="Descripción"></textarea>

<button name="guardar">Guardar</button>

</form>

</div>

</body>
</html>
<?php include("conexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM envios WHERE id=$id";
$resultado = mysqli_query($conn,$sql);
$fila = mysqli_fetch_assoc($resultado);

if(isset($_POST['actualizar'])){

    $destinatario = $_POST['destinatario'];
    $direccion = $_POST['direccion'];
    $descripcion = $_POST['descripcion'];

    $update = "UPDATE envios SET
    destinatario='$destinatario',
    direccion='$direccion',
    descripcion='$descripcion'
    WHERE id=$id";

    mysqli_query($conn,$update);

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

<h1>Editar Envío</h1>

<form method="POST">

<input type="text" name="destinatario"
value="<?php echo $fila['destinatario']; ?>">

<input type="text" name="direccion"
value="<?php echo $fila['direccion']; ?>">

<textarea name="descripcion"><?php echo $fila['descripcion']; ?></textarea>

<button name="actualizar">Actualizar</button>

</form>

</div>

</body>
</html>
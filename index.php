<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Mensajería</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h1>Envíos</h1>

<a href="crear.php">
    <button>Nuevo Envío</button>
</a>

<table>
<tr>
    <th>ID</th>
    <th>Destinatario</th>
    <th>Dirección</th>
    <th>Descripción</th>
    <th>Acciones</th>
</tr>

<?php
$sql = "SELECT * FROM envios";
$resultado = mysqli_query($conn, $sql);

while($fila = mysqli_fetch_assoc($resultado)){
?>

<tr>
    <td><?php echo $fila['id']; ?></td>
    <td><?php echo $fila['destinatario']; ?></td>
    <td><?php echo $fila['direccion']; ?></td>
    <td><?php echo $fila['descripcion']; ?></td>

    <td>
        <a href="editar.php?id=<?php echo $fila['id']; ?>">Editar</a>
        |
        <a href="eliminar.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
    </td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>
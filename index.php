<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>gention de Mensajería y envios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h1>Envíos para todo el pais del mundo mundial</h1>

<a class="nuevo-btn" href="crear.php">
    <button>+ Nuevo Envío</button>
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

    <td class="acciones">
    <a class="editar" href="editar.php?id=<?php echo $fila['id']; ?>">Editar</a>

    <a class="eliminar" href="eliminar.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
</td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>
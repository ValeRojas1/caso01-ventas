<?php
include("conexion.php");

$sql = "SELECT * FROM ventas";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Ventas</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="contenedor">
    <h1>Lista de Ventas</h1>

    <table border="1" width="100%">
        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Total</th>
            <th>Acción</th>
        </tr>

        <?php while($fila = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $fila['id']; ?></td>
            <td><?php echo $fila['cliente']; ?></td>
            <td><?php echo $fila['producto']; ?></td>
            <td><?php echo $fila['cantidad']; ?></td>
            <td><?php echo $fila['precio']; ?></td>
            <td><?php echo $fila['total']; ?></td>
            <td>
                <a href="editar.php?id=<?php echo $fila['id']; ?>">Editar</a>
            </td>
        </tr>
        <?php } ?>

    </table>
</div>

</body>
</html>
<?php
include("conexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM ventas WHERE id = $id";
$resultado = $conexion->query($sql);
$fila = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Venta</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="contenedor">
    <h1>Editar Venta</h1>

    <form action="actualizar.php" method="POST">

        <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">

        <label>Cliente:</label>
        <input type="text" name="cliente" value="<?php echo $fila['cliente']; ?>" required>

        <label>Producto:</label>
        <input type="text" name="producto" value="<?php echo $fila['producto']; ?>" required>

        <label>Cantidad:</label>
        <input type="number" name="cantidad" value="<?php echo $fila['cantidad']; ?>" min="1" required>

        <label>Precio:</label>
        <input type="number" step="0.01" name="precio" value="<?php echo $fila['precio']; ?>" required>

        <label>Total:</label>
        <input type="text" name="total" value="<?php echo $fila['total']; ?>" readonly>

        <button type="submit">Actualizar</button>
    </form>
</div>
<script>
document.querySelector("form").addEventListener("input", function() {
    let cantidad = document.querySelector("[name='cantidad']").value;
    let precio = document.querySelector("[name='precio']").value;

    if (cantidad > 0 && precio > 0) {
        let total = cantidad * precio;
        document.querySelector("[name='total']").value = total.toFixed(2);
    }
});
</script>
</body>
</html>
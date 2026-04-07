<?php
include("conexion.php");

$id = $_POST['id'];
$cliente = $_POST['cliente'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$total = $_POST['total'];

$sql = "UPDATE ventas 
        SET cliente='$cliente',
            producto='$producto',
            cantidad='$cantidad',
            precio='$precio',
            total='$total'
        WHERE id=$id";

if ($conexion->query($sql)) {
    echo "Actualizado correctamente";
} else {
    echo "Error al actualizar";
}
?>
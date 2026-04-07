<?php
include("conexion.php");

$cliente = $_POST['cliente'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$total = $_POST['total'];

$sql = "INSERT INTO ventas (cliente, producto, cantidad, precio, total)
        VALUES ('$cliente', '$producto', '$cantidad', '$precio', '$total')";

if ($conexion->query($sql) === TRUE) {
    echo "ok";
} else {
    echo "error";
}

$conexion->close();
?>
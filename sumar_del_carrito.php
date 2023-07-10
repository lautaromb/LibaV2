<?php
include_once "funciones.php";


$idProducto = $_POST["id_producto"];
if (existeProductoEnCarrito($idProducto)) {
    $cantidadActual = obtenerCantidadProductoEnCarrito($idProducto);
    sumarCantidadProductoEnCarrito($idProducto, $cantidadActual + 1);
} else {
    agregarProductoAlCarrito($idProducto);
}

header("Location: tienda.php");
?>

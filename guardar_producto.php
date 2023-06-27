<?php
// Verificar si se enviaron todos los datos necesarios
if (!isset($_POST["nombre"]) || !isset($_POST["precio"]) || !isset($_POST["descripcion"]) || !isset($_FILES["img"])) {
    exit("Faltan datos");
}

include_once "funciones.php";

// Obtener los datos del formulario
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];
$img = $_FILES["img"];


// Ruta donde se guardará la imagen
$directorioDestino = 'img/productos/'; // Reemplaza con la ruta deseada

// Verificar si se seleccionó una imagen
if ($img["error"] === UPLOAD_ERR_OK) {
    $nombreArchivo = $img["name"];
    $rutaArchivo = $directorioDestino . $nombreArchivo;
    // Mover la imagen al directorio de destino
    if (move_uploaded_file($img["tmp_name"], $rutaArchivo)) {
        // Guardar la información del producto en la base de datos
        guardarProducto($nombre, $descripcion, $precio, $rutaArchivo);
        header("Location: productos.php");
        exit;
    } else {
        exit("Error al mover el archivo de imagen");
    }
} else {
    exit("Error al subir la imagen");
}
?>

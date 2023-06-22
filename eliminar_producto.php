<?php
session_start();
if ($_SESSION['nombre'] != null && $_SESSION['nombre'] == 'administrador'){
    if (!isset($_POST["id_producto"])) {
        exit("No hay datos");
    }
    
    include_once "funciones.php";
    eliminarProducto($_POST["id_producto"]);
    header("Location: productos.php");
  
}
else{
  header("location:productos.php"); 
}
?>

<?php
session_start();

    $a = $_POST['nombre'];
    $b = $_POST['apellido'];

    //conectar a base de datos
    $conexion = mysqli_connect("localhost", "root", "", "tienda");
    
    $consulta = "SELECT * FROM  usuario WHERE usuario  = '$a' and contraseña  ='$b'";
    $resultado = mysqli_query($conexion, $consulta);

    $_SESSION['nombre'] = $a;

    $filas=mysqli_num_rows($resultado);
    if ($filas > 0){
        header("location:bienvenido.php");
    }
    else {
        header("location:formulario.php");
    }

?>
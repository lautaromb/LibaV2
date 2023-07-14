<?php

    // Archivo de conexion
    include('inc/conexion.php');

    // Recupero los valores del formulario.
    $nombre = $_POST ['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $email = $_POST ['email'];
    $contraseña = $_POST ['contraseña'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $provincia = $_POST['provincia'];

    // Verifico cuantas veces esta cargado el usuario en la BDD
    $consulta1 = "select count(distinct usuario) as nuevo from usuario where usuario = '$usuario' ";
    $resultado1 = mysqli_query($conexion,$consulta1);
    while($a = mysqli_fetch_assoc($resultado1)){
        $existe = $a['nuevo'];
    }

    // Estructura de decision
    if($existe==1){
        header("Location:registro.php?mensaje=uno");
    }else{
        $alta = "insert into usuario values ('$nombre','$apellido','$usuario','$email','$contraseña','$direccion','$ciudad','$provincia')";
        $resultado_alta = mysqli_query($conexion,$alta);

        header("Location: bienvenido.php");
                               
    }
?>
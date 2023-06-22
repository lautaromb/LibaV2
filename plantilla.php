<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Archivos a incluir -->
    <?php 
      include('inc/menu.php');  
      include('inc/conexion.php');
    ?>

    <!-- Trabajo con BDD -->
    <?php


    // Paso 4: Creo la consulta SQL
    $consulta = "select count(distinct usuario) as usuarios from usuario";

    // Paso 5: Ejecutamos la consulta SQL
    $resultado = mysqli_query($conexion,$consulta) 
    or die ('No se pudo ejecutar la consulta');
    
    // Paso 6: Cierro la conexion
    mysqli_close($conexion);

  ?>


    <title>Plantilla</title>
  </head>
  <body class="container-fluid">   

    <!-- Menu de navegacion -->
    <?php menu(); ?>

    <!-- Título de la página -->
    <div class="alert alert-dark text-center fst-italic" role="alert">
        <h3>Este es el título</h3>
    </div>

    <!-- Consulta -->
    <?php
    while($fila = mysqli_fetch_assoc($resultado)){
      $cantidad_de_usuarios = $fila['usuarios'];
    }

    ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>
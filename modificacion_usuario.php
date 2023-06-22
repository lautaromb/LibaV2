<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/icono.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Archivos a incluir -->
    <?php 
      include('inc/conexion.php');
    ?>

    <!-- Trabajo con BDD -->
    <?php
    // Mensaje
    $mensaje = 'Ingrese los datos del nuevo usuario';
    if(isset($_GET['mensaje'])){
      if($_GET['mensaje']=='uno'){$mensaje = 'El usuario ya existe en la base de datos';}
    }
    
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $usuario = $_GET['usuario'];
    $email = $_GET['email'];
    $contraseña = $_GET['contraseña'];
    $direccion = $_GET['direccion'];
    $ciudad = $_GET['ciudad'];
    $provincia = $_GET['provincia'];
    ?>

    <title>Modificacion de Usuario</title>
  </head>
  <body class="container-fluid">   

    <!-- Título de la página -->
    <div class="alert alert-dark text-center fst-italic" role="alert">
        <h3>Modificacion de usuario</h3>
    </div>
    <br>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">

            <form action="modificacion_usuario_sql.php" method="POST">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre a modificar</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value=<?php echo $nombre ?>>
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido a modificar</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" value=<?php echo $apellido ?>>
                </div>
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario a modificar</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" value=<?php echo $usuario ?>>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email a modificar</label>
                    <input type="text" class="form-control" id="email" name="email" value=<?php echo $email ?>>
                </div>
                <div class="mb-3">
                    <label for="contraseña" class="form-label">Contraseña a modificar</label>
                    <input type="text" class="form-control" id="contraseña" name="contraseña" value=<?php echo $contraseña ?>>
                </div>
                <div class="mb-3">
                    <label for="direccion" class="form-label">Direccion a modificar</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" value=<?php echo $direccion ?>>
                </div>
                <div class="mb-3">
                    <label for="ciudad" class="form-label">Ciudad a modificar</label>
                    <input type="text" class="form-control" id="ciudad" name="ciudad" value=<?php echo $ciudad ?>>
                </div>
                <div class="mb-3">
                    <label for="provincia" class="form-label">Provincia a modificar</label>
                    <input type="text" class="form-control" id="provincia" name="provincia" value=<?php echo $provincia ?>>
                </div> 
                
                <button type="submit" class="btn btn-primary" name='boton' value=1>Modificar</button>
                <button type="submit" class="btn btn-danger" name='boton' value=0>Cancelar</button>
            </form>
            <br>

        </div>
        <div class="col-3"></div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
    <?php include('inc/menu.php');  ?>

    <title>Formulario</title>
    <link rel="icon" href="img/icono.png" type="image/x-icon">
  </head>
  <body class="container-fluid">
    <!-- Menu de navegacion -->
    <?php menu(); ?>

    <br><br><br>  

    <!-- Fila 1 -->
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">

        <form action="formulario_destino.php" method="POST">
            <div class="mb-3">
                <label for="nombre" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba su usuario">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Contraseña</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Escriba su contraseña">
            </div>
            <button type="submit" class="btn btn-primary">Iniciar sesion</button>
            <a class="btn btn-primary" href="registro.php" role="button">Crear Cuenta</a>
        </form>  <br>      
          <a href="recuperarpass.php">¿Se te olvido la contraseña?</a>
        </div>
        <div class="col-3"></div>
    </div>

    <br><br><br>



    <div id="contenedor_carga">
        <div id="carga"></div>
    </div>

    <script>
        window.onload = function(){
          var contenedor = document.getElementsById('contenedor_carga');
        }
        contenedor.style.visibility = 'hidden';
        contenedor.style.opacity = '0';

    </script>





     <div class="row"> 
   <div class="col-3"></div>
    <div class="col-6">
      <!--
<div class="spinner-border text-secondary" role="status">
  <span class="visually-hidden">Loading...</span>
 </div>-->

    </div>
     <div class="col-3"></div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>
  <footer>
     <br><br><br>    
      <p style="text-align: center;">Acuarela © 2022 - 2023. Todos los derechos reservados.</p>
  </footer>


  </body>   
</html>
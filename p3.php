<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/icono.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <?php include('inc/menu.php');  ?>
    <title>Tienda lomas</title>
    <link rel="icon" href="img/icono.ico" type="image/x-icon">
   
  </head>

  <body class="container-fluid">

     <?php menu(); ?>
    <!-- bootstrap js -->
      <script src="js/bootstrap.bundle.min.js"></script>

    <div>
        <section>
            <div id="carouselExampleIndicators" class=" container carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner width = 250px">
                <div class="carousel-item active">
                <img src="img/54411-valorant.jpg" class="d-block w-100" alt="..." width="800" height="450">
                </div>

                <div class="carousel-item">
                <img src="img/gaming.jpg" class="d-block w-100" alt="..." width="800" height="450">
                </div>
                <div class="carousel-item">
                <img src="img/ps4.png" class="d-block w-100" alt="..." width="800" height="450">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

            </div>
        </section>
    </div>
    <br><br><br>

    <div>
        <article>
            <div class="row justify-content-center">
                <div class="col-3">
                    <div class="card">
                        <img class="card-img-top" src="img/hdmi.jpg" alt="">
                        <div class="card-body">
                            <a class="btn btn-primary" href="tienda.php" role="button">Ir a tienda</a>
                            <h5 class="card-title">Producto 1</h5>
                            <p class="card-text">Cable HDMI</p>
                        </div>
                    </div>                   
                </div>
                <div class="col-3">
                    <div class="card">
                        <img class="card-img-top" src="img/joy.jpg" alt="">
                        <div class="card-body">
                            <a class="btn btn-primary" href="tienda.php" role="button">Ir a tienda</a>
                            <h5 class="card-title">Producto 2</h5>
                            <p class="card-text">Joystick</p>
                        </div>
                    </div>                   
                </div>
                <div class="col-3">
                    <div class="card">
                        <img class="card-img-top" src="img/mb.jpg" alt="">
                        <div class="card-body">
                            <a class="btn btn-primary" href="tienda.php" role="button">Ir a tienda</a>
                            <h5 class="card-title">Producto 3</h5>
                            <p class="card-text">Motherboard</p>
                        </div> 
                    </div>                   
                </div>

            </div>
        </article>
    </div> 
<br><br>

    <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="p2.php">Previous</a></li>
    <li class="page-item"><a class="page-link" href="index.php">1</a></li>
    <li class="page-item"><a class="page-link" href="p2.php">2</a></li>
    <li class="page-item"><a class="page-link" href="p3.php">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>

        <footer>
            <br>
            <br>
            <br>     
            <p style="text-align: center;">Tienda lomas © 2020 - 2021. Todos los derechos reservados.</p>
        </footer>
     <?php
    // Paso 1: Datos de conexion
    $usuario = 'root';
    $clave = '';
    $servidor = 'localhost';
    $basededatos = 'tienda';
    
    // Paso 2: Creo la conexion
    $conexion = mysqli_connect($servidor,$usuario,$clave) 
    or die ('No se ha podido conectar al servidor');

    // Paso 3: Me conecto a la base de datos.
    $db = mysqli_select_db($conexion,$basededatos) 
    or die ('No se pudo conectar a la base de datos');

    // Paso 4: Creo la consulta SQL
    $consulta = "select count(distinct usuario) as usuarios from usuario";

    // Paso 5: Ejecutamos la consulta SQL
    $resultado = mysqli_query($conexion,$consulta) 
    or die ('No se pudo ejecutar la consulta');
    
    // Paso 6: Cierro la conexion
    mysqli_close($conexion);

  ?>

  </body>
</html>
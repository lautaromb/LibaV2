<?php
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/estilos.css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet">
  
</head>

<body style="background-color:black">

    <nav class="navbar is-warning" role="navigation" aria-label="main navigation" style="background-color: white;">
        <div class="navbar-brand">
           
                
                <br>
      
                <nav style="background-color:white;">
                    <br>
                <h1><a href="index.php"><img src="img/atras.png"></a></h1>
                <br>
            
            </a>
            <button class="navbar-burger is-warning button" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </button>
        </header>
        </div>
    
        <div class="navbar-menu" background-color="white" class="social">
            <div class="navbar-start">
               <a class="navbar-item" href="productos.php">Productos</a>
            <a class="navbar-item" href="tienda.php">Tienda</a>
            </div>
        </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="ver_carrito.php" class="button is-success">
                           <strong>Ver carrito <?php
                                                include_once "funciones.php";
                                                $conteo = count(obtenerIdsDeProductosEnCarrito());
                                                if ($conteo > 0) {
                                                    printf("(%d)", $conteo);
                                                }
                                                ?>&nbsp;<i class="fa fa-shopping-cart"></i></strong>
                        </a>
                    </div>
                </div>
            </div>
    </nav>

        </div>
    </nav>
</table>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", () => {
            const boton = document.querySelector(".navbar-burger");
            const menu = document.querySelector(".navbar-menu");
            boton.onclick = () => {
                menu.classList.toggle("is-active");
                boton.classList.toggle("is-active");
            };
        });

    </script>
    <section class="section">
    </section>
</div>
</nav>
    </body>
    </html>


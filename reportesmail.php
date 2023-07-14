<h2><a href="tienda.php"><img src="img/atras.png"></a></h2>

    <html>
        <head> 
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/reportesmail.css" rel="stylesheet">
    </head>
    <body>
    <div class="alert alert-secondary" role="alert">
  <h1>Reportes de email</h1>
</div>
    </body>
    </html>
<?php
// Configuración de la base de datos
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'tienda';

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die('Error de conexión a la base de datos: ' . $conn->connect_error);
}

// Consulta de los correos electrónicos
$sql = 'SELECT email FROM usuario';
$resultado = $conn->query($sql);

// Mostrar los correos electrónicos
if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        echo $row['email'] . '<br>';
    }
} else {
    echo 'No se encontraron correos electrónicos registrados.';
}

// Cierre de la conexión a la base de datos
$conn->close();
?>
<footer>
     <br><br><br>    
      <p style="text-align: center; ">Acuarela © 2023 - 2024. Todos los derechos reservados.</p>
  </footer>
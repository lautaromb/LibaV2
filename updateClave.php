<?php
include('verificarDatos/config.php');
$id 		    = $_REQUEST['id'];
$password       = $_REQUEST['password'];

$updateClave    = ("UPDATE usuario SET contraseña='$password'");
$queryResult    = mysqli_query($con,$updateClave); 

?>

<meta http-equiv="refresh" content="0;url=index.php?email=1"/>
<?php
session_start();
if ($_SESSION['nombre'] != null && $_SESSION['nombre'] == 'administrador'){
  header("location: mostrardatos.php");
}
elseif ($_SESSION['nombre'] != null && $_SESSION['nombre'] != 'administrador')  {
  header("location:modificacion_usuario.php");
}
else{
  header("location:index.php"); 
}

?>
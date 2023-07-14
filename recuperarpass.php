
<?php
  

?>




<html>
    <head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
    <div class="alert alert-primary" role="alert">
  Recuperar password
</div>

    <br><br>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
        <form action="iniciar_recupero.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="username">Por favor, ingrese su nombre de usuario</label>
                </td>
                <td>
                    <input type="text" name="username" id="username">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Recuperar contrase&ntilde;a">
                </td>
            </tr>
        </table>
    </form>
</div class="col-6">
<div class="col-3"></div>

    </div>
</body>
<footer>
     <br><br><br>    
      <p style="text-align: center;">Acuarela © 2022 - 2023. Todos los derechos reservados.</p>
  </footer>
</html>

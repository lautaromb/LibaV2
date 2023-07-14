
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/estilos1.css">
	<title>Gracias</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="icon" href="img/icono.png" type="image/x-icon">
</head>

<body>
<h1><a href="ver_carrito.php"><img src="img/atras.png"></a></h1>
<br>
<div class="alert alert-secondary" role="alert">
  Informacion de facturacion
</div>
<div class="row">
        <div class="col-3"></div>
        <div class="col-6">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre">
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="apellido" name="apellido"  placeholder="Ingrese su apellido">
                </div>
				<div class="mb-3">
                    <label for="apellido" class="form-label">Pais/Region</label>
                    <input type="text" class="form-control" id="apellido" name="apellido"  placeholder="Ingrese su Pais/Region">
                </div>
				<div class="mb-3">
                    <label for="nombre" class="form-label">Calle</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su calle">
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Numero, Piso, Unidad</label>
                    <input type="text" class="form-control" id="apellido" name="apellido"  placeholder="Ingrese su numero, piso, unidad">
                </div>
				<div class="mb-3">
                    <label for="apellido" class="form-label">Region / Provincia</label>
                    <input type="text" class="form-control" id="apellido" name="apellido"  placeholder="Ingrese su Region / Provincia">
                </div>
				<div class="mb-3">
                    <label for="nombre" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su ciudad">
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Codigo postal</label>
                    <input type="text" class="form-control" id="apellido" name="apellido"  placeholder="Ingrese su codigo postal">
                </div>
				<div class="mb-3">
                    <label for="apellido" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="apellido" name="apellido"  placeholder="Ingrese su telefono">
                </div>
				<div class="mb-3">
                    <label for="apellido" class="form-label">Direccion de correo electronico</label>
                    <input type="email" class="form-control" id="apellido" name="apellido"  placeholder="Ingrese su correo electronico">
                </div>
				
		<div class="col-3"></div>
   		</div>
		   <div class="alert alert-secondary" role="alert">
 					 Informacion de envio
			</div>
			<div class="row">
        <div class="col-3"></div>
        <div class="col-6">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre">
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="apellido" name="apellido"  placeholder="Ingrese su apellido">
                </div>
				<div class="mb-3">
                    <label for="apellido" class="form-label">Pais/Region</label>
                    <input type="text" class="form-control" id="apellido" name="apellido"  placeholder="Ingrese su Pais/Region">
                </div>
				<div class="mb-3">
                    <label for="nombre" class="form-label">Calle</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su calle">
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Numero, Piso, Unidad</label>
                    <input type="text" class="form-control" id="apellido" name="apellido"  placeholder="Ingrese su numero, piso, unidad">
                </div>
				<div class="mb-3">
                    <label for="apellido" class="form-label">Region / Provincia</label>
                    <input type="text" class="form-control" id="apellido" name="apellido"  placeholder="Ingrese su Region / Provincia">
                </div>
				<div class="mb-3">
                    <label for="nombre" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su ciudad">
                </div>
				<div class="mb-3">
                    <label for="nombre" class="form-label">Codigo Postal</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su CP">
                </div>
		<div class="col-3"></div>
   		</div>
		   <div class="alert alert-secondary" role="alert">
 					 Tu pedido
			</div>
			<table>
				<tr>
					<td>Producto</td>
					<td>Sub-total</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>
						
					</td>
				</tr>
				<tr>
					<td>Subtotal</td>
					<td></td>
				</tr>
				<tr>
					<td>Envio</td>
					<td>
						<label for="retirarlo" class="form-label">Voy a retirarlo</label>
						<input type="checkbox" id="retirarlo"><br>
						<label for="envio" class="form-label">ENVIO DOMICILIO RESTO DEL PAIS </label>
						<input type="checkbox" id="envio"><br>
					</td>
				</tr>
				<tr>
					<td>Total</td>
					<td></td>
				</tr>
			</table><br><br>
			<div class="alert alert-secondary" role="alert">
 					 Informacion de envio
			</div>
	<div>
		
	<label for="efectivo" class="form-label">Pago en EFECTIVO al Recibir la Mercaderia (VALIDO PARA PROMOCIONES)</label>
	<input type="checkbox" id="efectivo"><br>
	<label for="transferencia" class="form-label">TRANSFERENCIA BANCARIA (Valido promociones)</label>
	<input type="checkbox" id="transferencia"><br>
	<label for="debito" class="form-label">TARJETA DE DÉBITO (NO PROMOCIONES)</label>
	<input type="checkbox" id="debito"><br>
	<label for="medio" class="form-label">Paga con el medio de pago que prefieras(Mercado pago)</label>
	<input type="checkbox" id="envio"><br>

	</div><BR><BR></BR></BR>
	<button type="button" class="btn btn-outline-primary">REALIZAR EL PEDIDO</button>
</body>
<footer><br>
<!--<table class="none">
	<tr>
		<td><a href="https://api.whatsapp.com/send?phone=1133176524" class="btn-wsp" target="_blank">
	    <i class="icon-whatssap"></i><img src="img/wp.png" alt=""></td>
		<td><img src="img/icono.png" alt="acuarela">
	</a><br></td>
	</tr>
</table>-->
<a href="https://api.whatsapp.com/send?phone=1133176524" class="btn-wsp" target="_blank">
	    <i class="icon-whatssap"></i><img src="img/wp.png" alt=""></td>
		<img src="img/icono.png" alt="acuarela">
</footer>
</html>
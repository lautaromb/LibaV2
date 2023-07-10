<?php
?>
<?php

function prepararDatosGraficoCircular($estadisticasVentas)
{
    $datosGraficoCircular = [
        'labels' => ['Total Ventas', 'Total Productos'],
        'data' => [$estadisticasVentas['totalVentas'], $estadisticasVentas['totalProductos']],
        'colores' => ['#ff6384', '#36a2eb'], // Colores para cada segmento del gráfico
    ];

    return $datosGraficoCircular;
}



function generarEstadisticasVentas($datosVentas, $datosProductos)
{
    $totalVentas = count($datosVentas);
    $totalProductos = count($datosProductos);

    // Aquí puedes generar otras estadísticas según tus necesidades

    $estadisticasVentas = [
        'totalVentas' => $totalVentas,
        'totalProductos' => $totalProductos,
    ];

    return $estadisticasVentas;
}
function obtenerProductosEnCarrito()
{
    $bd = obtenerConexion();
    iniciarSesionSiNoEstaIniciada();
    $sentencia = $bd->prepare("SELECT productos.id, productos.nombre, productos.descripcion, productos.precio
     FROM productos
     INNER JOIN carrito_usuarios
     ON productos.id = carrito_usuarios.id_producto
     WHERE carrito_usuarios.id_sesion = ?");
    $idSesion = session_id();
    $sentencia->execute([$idSesion]);
    return $sentencia->fetchAll();
}
function quitarProductoDelCarrito($idProducto)
{
    $bd = obtenerConexion();
    iniciarSesionSiNoEstaIniciada();
    $idSesion = session_id();
    $sentencia = $bd->prepare("DELETE FROM carrito_usuarios WHERE id_sesion = ? AND id_producto = ?");
    return $sentencia->execute([$idSesion, $idProducto]);
}

function obtenerProductos()
{
    $bd = obtenerConexion();
    $sentencia = $bd->query("SELECT id, nombre, descripcion, precio, img, cantidad FROM productos");
    return $sentencia->fetchAll();
}
function productoYaEstaEnCarrito($idProducto)
{
    $ids = obtenerIdsDeProductosEnCarrito();
    foreach ($ids as $id) {
        if ($id == $idProducto) return true;
    }
    return false;
}

function obtenerIdsDeProductosEnCarrito()
{
    $bd = obtenerConexion();
    iniciarSesionSiNoEstaIniciada();
    $sentencia = $bd->prepare("SELECT id_producto FROM carrito_usuarios WHERE id_sesion = ?");
    $idSesion = session_id();
    $sentencia->execute([$idSesion]);
    return $sentencia->fetchAll(PDO::FETCH_COLUMN);
}

function agregarProductoAlCarrito($idProducto)
{
    // Ligar el id del producto con el usuario a través de la sesión
    $Cantidad = 0;
    $Cantidad = $Cantidad + 1;
    $bd = obtenerConexion();
    iniciarSesionSiNoEstaIniciada();
    $idSesion = session_id();
    $sentencia = $bd->prepare("INSERT INTO carrito_usuarios(id_sesion, id_producto, cantidad) VALUES (?, ?, ?)");
    return $sentencia->execute([$idSesion, $idProducto, $Cantidad]);
}
function agregarProductoAlCarritoVentas($idProducto, $idSesion, $NPedido, $nombre, $cantidad, $total)
                    
                    
                    
                       {
                            $NPedido = 0;
                            // Ligar el id del producto con el usuario a través de la sesión
                            $bd = obtenerConexion();
                           iniciarSesionSiNoEstaIniciada();
                           $idSesion = session_id();
                            $NPedido = $NPedido + 1;
                            $ProductosEnCarritos = obtenerProductosEnCarrito();
                            foreach ($ProductosEnCarritos as $producto) {
                            $total = $producto->precio;
                            $nombre= $producto->Nombre;
                            //$cantidad = $producto->Cantidad;
                            $total = $producto->PrecioTotal;
                            $sentencia = $bd->prepare("INSERT INTO ventas(IdSesion, NPedidos, Nombre, Cantidad, PrecioTotal) VALUES (?, ?, ?, ?, ?)");
                        return $sentencia->execute([ $idSesion, $NPedido, $nombre, $cantidad, $total]);
                        }
                        }
                    
                         
function obtenerCantidadProductoEnCarrito($idProducto) {
    

    
    if (isset($_SESSION['carrito'][$idProducto])) {
        return $_SESSION['carrito'][$idProducto]['cantidad'];

    }

}


function sumarCantidadProductoEnCarrito($idProducto, $cantidadSumar) {
    if (isset($_SESSION['carrito'][$idProducto])) {
        $bd = obtenerConexion();
        $idSesion = session_id();
        
        // Obtener la cantidad actual del producto en la base de datos
        $sentencia = $bd->prepare("SELECT cantidad FROM carrito_usuarios WHERE id_sesion = ? AND id_producto = ?");
        $sentencia->bind_param("ss", $idSesion, $idProducto);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        $fila = $resultado->fetch_assoc();
        $cantidadActual = $fila['cantidad'];
        
        // Actualizar la cantidad sumando la cantidad existente más la cantidad a sumar más 1
        $nuevaCantidad = $cantidadActual + $cantidadSumar + 1;
        
        // Actualizar la columna cantidad en la base de datos
        $sentencia = $bd->prepare("UPDATE carrito_usuarios SET cantidad = ? WHERE id_sesion = ? AND id_producto = ?");
        $sentencia->bind_param("dss", $nuevaCantidad, $idSesion, $idProducto);
        $resultado = $sentencia->execute();
        
        $_SESSION['carrito'][$idProducto]['cantidad'] += $cantidadSumar;
    }
}


function existeProductoEnCarrito($idProducto) {
    
    return isset($_SESSION['carrito'][$idProducto]);
}


function obtenerVentas()
{
    $conexion = obtenerConexion();
    $consulta = "SELECT id_producto, id_sesion, cantidad FROM carrito_usuarios";
    $stmt = $conexion->prepare($consulta);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function iniciarSesionSiNoEstaIniciada()
{
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
}

function eliminarProducto($id)
{
    $bd = obtenerConexion();
    $sentencia = $bd->prepare("DELETE FROM productos WHERE id = ?");
    return $sentencia->execute([$id]);
}

function guardarProducto($nombre, $descripcion, $precio, $img)
{
    $bd = obtenerConexion();
    $sentencia = $bd->prepare("INSERT INTO productos(nombre, descripcion, precio, img) VALUES(?, ?, ?, ?)");
    return $sentencia->execute([$nombre,  $descripcion, $precio, $img]);
}

function obtenerVariableDelEntorno($key)
{
    if (defined("_ENV_CACHE")) {
        $vars = _ENV_CACHE;
    } else {
        $file = "env.php";
        if (!file_exists($file)) {
            throw new Exception("El archivo de las variables de entorno ($file) no existe. Favor de crearlo");
        }
        $vars = parse_ini_file($file);
        define("_ENV_CACHE", $vars);
    }
    if (isset($vars[$key])) {
        return $vars[$key];
    } else {
        throw new Exception("La clave especificada (" . $key . ") no existe en el archivo de las variables de entorno");
    }
}
function obtenerConexion()
{
    $password = obtenerVariableDelEntorno("MYSQL_PASSWORD");
    $user = obtenerVariableDelEntorno("MYSQL_USER");
    $dbName = obtenerVariableDelEntorno("MYSQL_DATABASE_NAME");
    $database = new PDO('mysql:host=localhost;dbname=' . $dbName, $user, $password);
    $database->query("set names utf8;");
    $database->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    return $database;
}

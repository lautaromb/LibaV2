<?php
?>
<?php include_once "encabezado.php" ?>
<?php
include_once "funciones.php";
$productos = obtenerProductos();
?>
<div class="columns">
    <div class="column">
        <h2 class="is-size-2">Productos existentes</h2>
        <a class="button is-success" href="agregar_producto.php">Nuevo&nbsp;<i class="fa fa-plus"></i></a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($productos as $producto) { ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $producto->nombre ?></h5>
                <img src="<?php echo $producto->img ?>" class="card-img-top" alt="Imagen del producto" style="width:200px">
                    <p class="card-text"><?php echo $producto->descripcion ?></p>
                    <p class="card-text">$<?php echo number_format($producto->precio, 2) ?></p>
                    <p class="card-text">Stock -> <?php echo $producto->cantidad ?></p>
                    <form action="eliminar_producto.php" method="post">
                        <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                        <button class="btn btn-danger">
                            <i class="fa fa-trash-o"></i>
                        </button>
                    </form>
                </div>
            </div>
        <?php } ?>

            </tbody>
        </table>
    </div>
</div>
<?php include_once "pie.php" ?>
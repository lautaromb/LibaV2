
<!DOCTYPE html>


<html>
<?php
 
require_once 'funciones.php';
require_once 'encabezado.php';
 
$datosVentas = obtenerVentas();
$datosProductos = obtenerProductos();


$estadisticasVentas = generarEstadisticasVentas($datosVentas, $datosProductos);
$datosGraficoCircular = prepararDatosGraficoCircular($estadisticasVentas);
?>
<head>
    <title>Panel de Estadísticas</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
 
    <style>
        body {
            max-width: 1200px; 
            margin: 0 auto;  
            padding: 20px;  
        }

         
        .chart-container {
            max-width: 600px; 
            margin-bottom: 20px; 
        }
 
        .chart {
            width: 100%; 
        }
        
  .descripcion-ventas {
    background-color: #f0f0f0;
    padding: 10px;
    margin-top: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  
  .descripcion-ventas h3 {
    font-size: 18px;
    margin-bottom: 10px;
  }
  
  .descripcion-ventas ul {
    list-style-type: disc;
    padding-left: 20px;
  }
  
  .descripcion-ventas li {
    margin-bottom: 5px;
  }
</style>


</head>
<body>
    <h1>Panel de Estadísticas</h1>

    <div >
        <h2>Gráfico Circular de Ventas por Categoría</h2>
        <canvas id="graficoCircular"></canvas>
        
    <canvas id="graficoCircular"></canvas>

    </div>

    <div style="width: 100%; height: 100%;">
    <canvas id="graficoCircular"></canvas>
    <div class="descripcion-ventas">
  <h3>Descripción de lo que se vendió:</h3>
  <ul>
    <?php foreach ($datosVentas as $venta): ?>
      <li>
        <?php echo "Producto ID: " . $venta['id_producto'] . ", Sesión ID: " . $venta['id_sesion']; ?>
      </li>
    <?php endforeach; ?>
  </ul>
</div>

    <script>
     
    var canvas = document.getElementById('graficoCircular');
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    
    var ctx = canvas.getContext('2d');
    var datosGrafico = <?php echo json_encode($datosGraficoCircular); ?>;
    var grafico = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: datosGrafico.labels,
            datasets: [{
                data: datosGrafico.data,
                backgroundColor: datosGrafico.colores,
            }]
        },
        
    });

   
    window.addEventListener('resize', function() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        grafico.resize();
    });

    
</script>
</body>
</html>
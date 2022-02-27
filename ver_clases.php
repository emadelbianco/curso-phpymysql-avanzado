
<?php 

include("conexion.php");

$consulta = mysqli_query($conexion, 'SELECT * FROM clases ORDER BY fecha');

while($listar = mysqli_fetch_assoc($consulta)) { ?>

    <div class="unidad">
        <p><?php echo $listar['unidad'] ?></p>
    </div>

    <div class="fecha">
        <p><?php echo $listar['fecha'] ?> (aaaa - mm - dd)</p>
    </div>

<?php }?>

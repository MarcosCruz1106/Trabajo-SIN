<?php
    include 'header2.php';

    $con= mysqli_connect("localhost","root","","mydb");
    $sql= "SELECT * FROM productos where idProducto = '".$_GET['id']."'";
    $result = mysqli_query($con, $sql);
    $producto = mysqli_fetch_array($result);  
?>

<br>
<br>
<br>
<br>

<div class="contenedor-imagen">
    <div class="imagen">
        <img src="<?php echo $producto['imagen']?>" alt="">
    </div>

    <div class="contenedor">
        <h1><?php echo $producto['nombre']?></h1>
        <div class="caracteristicas">
            <a href="#" class="btn">Agregar al carrito</a>
            <div class="info">
                <p class="precio">S/. <?php echo $producto['precio']?></p>
                <p class="stock">Stock: <?php echo $producto['stock']?></p>
            </div>
        </div>
        <h2><?php echo $producto['detalle']?></h2>
    </div>
</div>
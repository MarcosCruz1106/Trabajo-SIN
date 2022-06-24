<?php
session_start();

$post = (isset($_POST['nombre']) && !empty($_POST['nombre'])) &&
        (isset($_POST['detalle']) && !empty($_POST['detalle']))&&
        (isset($_POST['stock']) && !empty($_POST['stock'])) &&
        (isset($_POST['precio']) && !empty($_POST['precio'])) &&
        (isset($_POST['imagen']) && !empty($_POST['imagen']));

if ($post) {
        $con= mysqli_connect("localhost","root","","sin_grupo_2");
        $sql4= "UPDATE productos SET nombre= '".$_POST['nombre']."', detalle = '".$_POST['detalle']."', stock = '".$_POST['stock']."', precio = '".$_POST['precio']."', imagen= '".$_POST['imagen']."' WHERE idProducto= '".$_POST['idProducto']."'";
        $result = mysqli_query($con, $sql4);
        header("location: productos2.php");

}else{
    header("location: editarProducto.php");
}
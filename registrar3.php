<?php
session_start();

$post = (isset($_POST['nombre']) && !empty($_POST['nombre'])) &&
        (isset($_POST['detalle']) && !empty($_POST['detalle']))&&
        (isset($_POST['stock']) && !empty($_POST['stock'])) &&
        (isset($_POST['precio']) && !empty($_POST['precio'])) &&
        (isset($_POST['imagen']) && !empty($_POST['imagen']));
if ($post) {
    $con= mysqli_connect("localhost","root","","sin_grupo_2");
    $sql4= "INSERT INTO productos (idProducto,nombre, detalle, stock, precio, imagen)  VALUES (NULL,'".$_POST['nombre']."', '".$_POST['detalle']."', '".$_POST['stock']."', '".$_POST['precio']."', '".$_POST['imagen']."');";
    $result = mysqli_query($con, $sql4);
    header("location: newProducto.php");

}else{
    header("location: registar3.php");

}
<?php
session_start();

include ('db_conf.php');
$sql= "SELECT * FROM productos where idProducto = '".$_GET['id']."'";
$result = mysqli_query($con, $sql);
$producto = mysqli_fetch_array($result);

if(isset($_SESSION["cart"][$_GET["id"]])){
    $_SESSION["cart"][$_GET["id"]]["qty"]++;
}else{
    $_SESSION["cart"][$_GET["id"]]["qty"] = 1;
}

$_SESSION["cart"][$_GET["id"]]["nombre"] = $producto['nombre'];;
$_SESSION["cart"][$_GET["id"]]["precio"] = $producto['precio'];;

header("location: productos.php");

?>

<?php
    session_start();
    include ('db_conf.php');
    $sql = "SELECT * FROM usuario where dni = '".$_SESSION["usuario"]."'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_array($result);

    include 'actualizarStock.php';

    $sql2= "INSERT INTO boletas (idBoleta, total, fecha, estado, dniCliente, idMedio) VALUES (NULL, '".$_GET['total']."', '".$_GET['fecha']."', '0', '".$user['dni']."', '".$_GET['medio']."');";

    unset($_SESSION["cart"]);
    $result2 = mysqli_query($con, $sql2);
    header("location:productos.php");
?>include ('db_conf.php');

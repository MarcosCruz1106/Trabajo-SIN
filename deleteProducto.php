<?php
    session_start();
    include ('db_conf.php');
    $sql= "DELETE FROM productos where idProducto = '".$_GET['id']."'";
    $result = mysqli_query($con, $sql);
    header("location: productos2.php");
?>

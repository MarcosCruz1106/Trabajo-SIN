<?php
    session_start();
    $con= mysqli_connect("localhost","root","","sin_grupo_2");
    $sql= "DELETE FROM productos where idProducto = '".$_GET['id']."'";
    $result = mysqli_query($con, $sql);
    header("location: productos2.php");
?>

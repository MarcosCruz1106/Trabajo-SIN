<?php
    session_start();
    $con= mysqli_connect("localhost","root","","sin_grupo_2");
    $sql= "DELETE FROM usuario where dni = '".$_GET['id']."'";
    $result = mysqli_query($con, $sql);
    header("location: clientes.php");
?>
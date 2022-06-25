<?php
    session_start();
    include ('db_conf.php');
    $sql= "DELETE FROM usuario where dni = '".$_GET['id']."'";
    $result = mysqli_query($con, $sql);
    header("location: clientes.php");
?>

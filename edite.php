<?php
session_start();

$post = (isset($_POST['usuario']) && !empty($_POST['usuario'])) &&
        (isset($_POST['password']) && !empty($_POST['password']))&&
        (isset($_POST['email']) && !empty($_POST['email'])) &&
        (isset($_POST['dni']) && !empty($_POST['dni'])) &&
        (isset($_POST['nombre']) && !empty($_POST['nombre'])) &&
        (isset($_POST['apellidos']) && !empty($_POST['apellidos'])) &&
        (isset($_POST['cpassword']) && !empty($_POST['cpassword']));

if ($post) {
    if($_POST['password']==$_POST['cpassword']){
        include ('db_conf.php');

        $sql4= "UPDATE usuario SET dni= '".$_POST['dni']."', nombres = '".$_POST['nombre']."', apellidos = '".$_POST['apellidos']."', email = '".$_POST['email']."', usuario= '".$_POST['usuario']."', password= md5('".$_POST['password']."'), tipoUsuario = '".$_POST['tipoUsuario']."' WHERE dni= '".$_POST['dni']."'";
        $result = mysqli_query($con, $sql4);
        header("location: clientes.php");

    }else{
        header("location: error11.php");
    }

}else{
    header("location: editarCliente.php");

}

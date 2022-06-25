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
        $sql = "SELECT * FROM usuario where usuario ='".$_POST['usuario']."'";
        $result = mysqli_query($con, $sql);

        $sql2 = "SELECT * FROM usuario where email ='".$_POST['email']."'";
        $result2 = mysqli_query($con, $sql2);

        $sql3 = "SELECT * FROM usuario where dni ='".$_POST['dni']."'";
        $result3 = mysqli_query($con, $sql3);

        if ($result3->num_rows > 0){
            header("location: error41.php");
        }else{
            if ($result->num_rows > 0){
                header("location: error21.php");
            }else{
                if ($result2->num_rows > 0){
                    header("location: error31.php");
                }else{
                    $sql4= "INSERT INTO usuario (dni, nombres, apellidos, email, usuario, password, tipoUsuario)  VALUES ('".$_POST['dni']."', '".$_POST['nombre']."', '".$_POST['apellidos']."', '".$_POST['email']."', '".$_POST['usuario']."', md5('".$_POST['password']."'), '".$_POST['tipoUsuario']."');";
                    $result = mysqli_query($con, $sql4);
                    header("location: clientes.php");
                    //Causa error llevarlo de frente al index. Podemos buscar soluciones
                }
            }
        }

    }else{
        header("location: error11.php");
    }

}else{
    header("location: newCliente.php");

}

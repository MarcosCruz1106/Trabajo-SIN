<?php
session_start();

$post = (isset($_POST['usuario']) && !empty($_POST['usuario'])) &&
        (isset($_POST['password']) && !empty($_POST['password']))&&
        (isset($_POST['email']) && !empty($_POST['email'])) &&
        (isset($_POST['dni']) && !empty($_POST['dni'])) &&
        (isset($_POST['cpassword']) && !empty($_POST['cpassword']));

if ($post) {
    if($_POST['password']==$_POST['cpassword']){
        $con= mysqli_connect("localhost","root","","mydb");
        $sql = "SELECT * FROM usuario where usuario ='".$_POST['usuario']."'";
        $result = mysqli_query($con, $sql);

        $sql2 = "SELECT * FROM usuario where email ='".$_POST['email']."'";
        $result2 = mysqli_query($con, $sql2);

        $sql3 = "SELECT * FROM usuario where dni ='".$_POST['dni']."'";
        $result3 = mysqli_query($con, $sql3);

        if ($result3->num_rows > 0){
            header("location: error4.php");
        }else{
            if ($result->num_rows > 0){
                header("location: error2.php");
            }else{
                if ($result2->num_rows > 0){
                    header("location: error3.php");
                }else{
                    $sql4= "INSERT INTO usuario (dni, nombres, apellidos, celular, email, usuario, password, tipoUsuario)  VALUES ('".$_POST['dni']."', '', '', '', '".$_POST['email']."', '".$_POST['usuario']."', md5('".$_POST['password']."'), '0');";
                    $result = mysqli_query($con, $sql4);
                    header("location: login.php");
                    //Causa error llevarlo de frente al index. Podemos buscar soluciones
                }
            }
        }

    }else{
        header("location: error1.php");
    }

}else{
    header("location: registro.php");
    
}




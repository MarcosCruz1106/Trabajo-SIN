<?php
session_start();

$post = (isset($_POST['usuario']) && !empty($_POST['usuario'])) &&
        (isset($_POST['password']) && !empty($_POST['password']));


if ($post) {
    include ('db_conf.php');
    $sql = "SELECT * FROM usuario where usuario ='".$_POST['usuario']."' and password = md5('".$_POST['password']."')";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) == 1){
        $user = mysqli_fetch_array($result);
        $_SESSION["usuario"] = $user["dni"];
        header("location: index.php");
    }else{
        header("location: errorInicio.php");
    }
}else{
    header("location: login.php");

}

?>

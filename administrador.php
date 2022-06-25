<?php
    include 'header2.php';
    include ('db_conf.php');
    if (isset($_SESSION["usuario"])) {
        $sql = "SELECT * FROM usuario where dni = '".$_SESSION["usuario"]."'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_array($result);

        if(isset($user)){
            if($user['tipoUsuario']==1){
                echo '
                <div class="opciones123">
                    <a href="clientes.php" class="btn">Sección Clientes</a>
                    <a href="productos2.php" class="btn">Sección Productos</a>
                </div>';
            }else{
                echo '
                <div class="opciones123">
                    <h1> Solo eres un cliente</h1>
                </div>';
            }
        }else{
            echo 
                '<div class="error">
                <h1 class="h1">Aún no has iniciado con tu perfil</h1>
                <a href="login.php" class="btn">Ingresar</a>
                </div>';
        }
    }else{
        header("location:index.php");
    }
?>


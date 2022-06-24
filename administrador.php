<?php
    include 'header2.php';

    if(isset($_SESSION['usuario'])){
        echo '
            <div class="opciones123">
                <a href="clientes.php" class="btn">Sección Clientes</a>
                <a href="productos2.php" class="btn">Sección Productos</a>
            </div>';
    }else{
        echo 
            '<div class="error">
            <h1 class="h1">Aún no has iniciado con tu perfil</h1>
            <a href="login.php" class="btn">Ingresar</a>
            </div>';
    }
?>


<?php
    include 'header2.php';

    if(isset($_SESSION['usuario'])){
        echo '
            <div class="opciones123">
                <a href="showUsuario.php" class="btn">Ver mi perfil</a>
                <a href="logout.php" class="btn">Cerrar Sesión</a>
            </div>';
    }else{
        echo 
            '<div class="error">
            <h1 class="h1">Aún no has iniciado con tu perfil</h1>
            <a href="login.php" class="btn">Ingresar</a>
            </div>';
    }
?>

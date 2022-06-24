<br>
<br>
<?php
    include 'header2.php';
    if(isset($_SESSION["usuario"])){
        $con= mysqli_connect("localhost","root","","sin_grupo_2");
        $sql = "SELECT * FROM usuario where dni = '".$_SESSION["usuario"]."'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_array($result);
    }else{
        echo 
            '<div class="error">
            <h1 class="h1">Aún no has iniciado con tu perfil</h1>
            <a href="login.php" class="btn">Ingresar</a>
            </div>';
    }

    if($user['tipoUsuario']==0){
        $rol='cliente';
    }else{
        $rol='administrador';
    }
?>

<section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">
                    <img src="images/usuario.webp" alt="img-avatar">
                    <button type="button" class="boton-avatar">
                        <i class="far fa-image"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                <h3 class="titulo"><?php echo $user['nombres'].' '.$user['apellidos']; ?></h3>
                <p class="texto">El usuario <?php echo $user['nombres'].' '.$user['apellidos']; ?> con nickname <b><?php echo $user['usuario']?></b> tiene el rol de <?php echo $rol?>.</p>
            </div>
            <div class="perfil-usuario-footer">
                <ul class="lista-datos">
                    <li><i class="fa-solid fa-envelope"></i> Direccion de correo: <b><?php echo $user['email']?></b></li>
                    <li><i class="fa-solid fa-person"></i> Número de identificación: <b><?php echo $user['dni']?></b></li>
                    <li><i class="fa-solid fa-people-group"></i></i> Rol: <b><?php echo $rol?></b></li>
                </ul>
            </div>
        </div>
    </section>
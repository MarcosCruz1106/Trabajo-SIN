<br>
<br>
<?php
    include 'header2.php';
    if(isset($_SESSION["usuario"])){
        $con= mysqli_connect("localhost","root","","sin_grupo_2");
        if(isset($_GET['id'])){
            $sql = "SELECT * FROM usuario where dni = '".$_GET['id']."'";
            $sql45= "SELECT * FROM boletas WHERE dniCliente='".$_GET['id']."'";

        }else{
            $sql = "SELECT * FROM usuario where dni = '0'";
            $sql45= "SELECT * FROM boletas WHERE dniCliente='0'";


        }
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_array($result);
    }else{
        echo 
            '<div class="error">
            <h1 class="h1">Aún no has iniciado con tu perfil</h1>
            <a href="login.php" class="btn">Ingresar</a>
            </div>';
    }

    if(isset($user)){
        if($user['tipoUsuario']==0){
            $rol='cliente';
        }else{
            $rol='administrador';
        }
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

                <h3 class="titulo"><?php if(isset($user)){ echo $user['nombres'].' '.$user['apellidos'];} ?></h3>
                <p class="texto">El usuario <?php  if(isset($user)){ echo $user['nombres'].' '.$user['apellidos'];} ?> con nickname <b><?php  if(isset($user)){echo $user['usuario'];}?></b> tiene el rol de <?php  if(isset($rol)){echo $rol;}?>.</p>
            </div>
            <div class="perfil-usuario-footer">
                <ul class="lista-datos">
                    <li><i class="fa-solid fa-envelope"></i> Direccion de correo: <b><?php  if(isset($user)){echo $user['email'];}?></b></li>
                    <li><i class="fa-solid fa-person"></i> Número de identificación: <b><?php  if(isset($user)){echo $user['dni'];}?></b></li>
                    <li><i class="fa-solid fa-people-group"></i></i> Rol: <b><?php  if(isset($rol)){ echo $rol;}?></b></li>
                    
                </ul>
            </div>

            <div class="perfil-usuario-footer historial">
                <p><b>Historial de compras</b></p>
                <ul class="lista-datos">
                    <?php
                        $i=1;
                        $total=0;
                        if(isset($_GET['id'])){
                            $sql45= "SELECT * FROM boletas WHERE dniCliente='".$_GET['id']."'";
                        }else{
                            $sql45= "SELECT * FROM boletas WHERE dniCliente='0'";

                        }
                        if($result45 = mysqli_query($con, $sql45)){
                            if(isset($result45)){
                                while ($row = mysqli_fetch_array($result45)){
                                    echo '<li><b>'.$i.'°Compra:</b> Fecha: '.$row['fecha'].'. Consumo: S/.'.$row['total'].'</li>';
                                    $i++;
                                    $total = $total+ $row['total'];
                                }
                            }
                        }
                    ?>
                </ul>
                <p><b>Total consumido: </b>S/. <?php echo $total?></p>
            </div>
        </div>
</section>
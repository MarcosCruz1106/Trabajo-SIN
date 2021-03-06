<br>
<br>
<br>
<?php
    include 'header2.php';
    //phpinfo();
    include ('db_conf.php');

    if(isset($_SESSION['usuario'])){
        $sql = "SELECT * FROM usuario where dni = '".$_SESSION["usuario"]."'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_array($result);
        if($user['tipoUsuario']!=1){
            header("location:index.php");
        }
    }else{
		header("location:index.php");
	}
?>

<div class="container-fluid p-5 bg-primary text-white text-center">
    <h1>Lista de Clientes</h1>
    <P>Enlista todos los clientes de la página</P>
</div>

<div class="col-sm-12">
    <table class="table table-striped table-responsive">
        <thead class="table-primary">
            <tr>
                <td>DNI</td>
                <td>Nombres</td>
                <td>Email</td>
                <td>Nickname</td>
                <td>Rol</td>
                <td><a href="newCliente.php" >Nuevo Cliente</a></td>
            </tr>
        </thead>

        <tbody>
        <?php
            include ('db_conf.php');
            $sql= "SELECT * FROM usuario";
            if($result = mysqli_query($con, $sql)){
                while ($row = mysqli_fetch_array($result)){
                    if($row['tipoUsuario']==0){
                        $rol='cliente';
                    }else{
                        $rol='administrador';
                    }

                    echo '<tr>';
                        echo '<td>';
                            echo $row['dni'];
                        echo '</td>';

                        echo '<td>';
                            echo $row['nombres'].' '.$row['apellidos'];
                        echo '</td>';

                        echo '<td>';
                            echo $row['email'];
                        echo '</td>';

                        echo '<td>';
                            echo $row['usuario'];
                        echo '</td>';

                        echo '<td>';
                            echo $rol;
                        echo '</td>';

                        echo '<td>';
                            echo '<a href="showUsuario2.php?id='.$row['dni'].'"><i class="fa-solid fa-eye"></i></a>&nbsp; | &nbsp;';
                            echo '<a href="editarCliente.php?id='.$row['dni'].'"><i class="fa-solid fa-pen"></i></a>&nbsp; | &nbsp;';
                            echo '<a href="deleteCliente.php?id='.$row['dni'].'"><i class="fa-solid fa-trash"></i></a>&nbsp;';
                            echo '</td>';
                    echo '</tr>';
                }
            }
            mysqli_close($con);
        ?>
        </tbody>
    </table>
</div>

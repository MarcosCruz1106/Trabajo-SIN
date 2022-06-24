<br>
<br>
<br>
<?php
    include 'header2.php';
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
                <td>Rol</td>
                <td><a href="#" >Nuevo Cliente</a></td>
            </tr>
        </thead>
                        
        <tbody>
        <?php
            $con= mysqli_connect("localhost","root","","sin_grupo_2");
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
                            echo $rol;
                        echo '</td>';

                        echo '<td>';
                            echo '<a href="#">Ver</a>&nbsp;&nbsp;';
                            echo '<a href="#">Editar</a>&nbsp;&nbsp;';
                            echo '<a href="#">Eliminar</a>&nbsp;&nbsp;';                                    
                            echo '</td>';
                    echo '</tr>';    
                }
            }
            mysqli_close($con);
        ?>
        </tbody>
    </table>
</div>

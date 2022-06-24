<br>
<br>
<br>
<?php
    include 'header2.php';
?>

<div class="container-fluid p-5 bg-primary text-white text-center">
    <h1>Lista de Productos</h1>
    <P>Enlista todos los productos de la página</P>
</div>

<div class="col-sm-12">
    <table class="table table-striped table-responsive">
        <thead class="table-primary">
            <tr>
                <td>Nombre</td>
                <td>Detalle</td>
                <td></td>
                <td>Stock</td>
                <td>Precio</td>
                <td><a href="#" >Nuevo Producto</a></td>
            </tr>
        </thead>

        <tbody>
        <?php
            $con= mysqli_connect("localhost","root","","sin_grupo_2");
            $sql= "SELECT * FROM productos";
            if($result = mysqli_query($con, $sql)){
                while ($row = mysqli_fetch_array($result)){
                    

                    echo '<tr>';
                        echo '<td width="200px">';
                            echo $row['nombre'];
                        echo '</td>';

                        echo '<td width="600px">';
                            echo $row['detalle'];
                        echo '</td>';

                        echo '<td width="40px">';
                            echo '';
                        echo '</td>';

                        echo '<td>';
                            echo $row['stock'];
                        echo '</td>';

                        echo '<td>';
                            echo $row['precio'];
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
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
                <td>Orden</td>
                <td>Nombre</td>
                <td>Detalle</td>
                <td></td>
                <td>Stock</td>
                <td>Precio</td>
                <td><a href="newProducto.php" >Nuevo Producto</a></td>
            </tr>
        </thead>

        <tbody>
        <?php
            include ('db_conf.php');
            $sql= "SELECT * FROM productos ORDER BY stock DESC";
            if($result = mysqli_query($con, $sql)){
                $i=1;
                while ($row = mysqli_fetch_array($result)){
                    echo '<tr>';
                        echo '<td width="10px">';
                            echo $i;
                        echo '</td>';

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
                            echo 'S/.'.$row['precio'];
                        echo '</td>';


                        echo '<td>';
                            echo '<a href="show.php?id='.$row['idProducto'].'"><i class="fa-solid fa-eye"></i></a>&nbsp; | &nbsp;';
                            echo '<a href="editarProducto.php?id='.$row['idProducto'].'"><i class="fa-solid fa-pen"></i></a>&nbsp; | &nbsp;';
                            echo '<a href="deleteProducto.php?id='.$row['idProducto'].'"><i class="fa-solid fa-trash"></i></a>&nbsp;';
                            echo '</td>';
                    echo '</tr>';

                    $i++;
                }
            }
            mysqli_close($con);
        ?>
        </tbody>
    </table>
</div>

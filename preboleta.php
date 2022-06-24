<?php
    include 'header2.php';
?>
<br>
<br>
<br>

<div class="container-fluid p-5 bg-primary text-white text-center">
    <h1>Detalle de la compra</h1>
    <p>Proporcionamos una vista previa de la compra que usted está realizando</p>
</div>
<!-- <br> -->
<div class="col-sm-12">
    <table class="table table-striped table-responsive">
        <thead class="table-primary">
            <tr>
                <td class="">Nombre</td>
                <td>&nbsp;</td>
                <td class="">Cantidad</td>
                <td class="">Precio unitario</td>
                <td class="">Subtotal</td>
            </tr>
        </thead>
        <tbody>

    <?php
    
        $total=0;
        if (isset($_SESSION["cart"])) {
            foreach ($_SESSION["cart"] as $key => $value) {
                $subtotal = $value["precio"]*$value["qty"];
                $total += $subtotal;
                echo '<tr>';
                    // echo '<td>';
                    //     echo $key;
                    // echo '</td>';
                    echo '<td>';
                        echo $value["nombre"];
                    echo '</td>';
                    echo '<td >';
                        echo '&nbsp;';
                    echo '</td>';
                    echo '<td >';
                        echo $value["qty"];
                    echo '</td>';
                    echo '<td>';
                        echo 'S/. '.$value["precio"];
                    echo '</td>';
                    echo '<td>';
                        echo 'S/. '.$value["precio"]*$value["qty"];
                    echo '</td>';
                echo '</tr>';
            }
        }
        
    ?>
            <tfoot class="table-primary">
                <tr class="success">
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Total</td>
                    <td><b>S/. <?php echo $total ?></b></td>
                    
                </tr>
            </tfoot>
        </tbody>
    </table>
</div>

<form class="caja2" action="preboleta.php" method="POST">
    <div class="medio">
        <p>Medio de pago: 
        <?php
            if (isset($_POST['medio'])) {
                $con= mysqli_connect("localhost","root","","sin_grupo_2");
                $sql= "SELECT * FROM medios_de_pago	 where idMedio = '".$_POST['medio']."'";
                $result = mysqli_query($con, $sql);
                $medio = mysqli_fetch_array($result);
                echo $medio['nombre'];
            }
        ?>
        </p>
        <p>Nombre del cliente:
        <?php 
            if (isset($user)) {
                echo $user['nombres']. ' ' .$user['apellidos'];
            }
        ?>
        </p>
        <p>Dirección de entrega:
        <?php
            if (isset($user)) {
                echo $user['dirección'];
            } 
        ?>
        </p>

        <p>Fecha de la compra:
        <?php
            echo $fecha = date('d-m-Y', time());
        ?>
        </p>

    </div>
    <div class="seguridad">
        <p><b>¿está seguro de finalizar la compra?</b></p>
        <div class="botones2">
        <?php
            if (isset($_POST['medio'])) {
                echo '<a href="boleta.php?fecha='.$fecha.'&total='.$total.'&idMedio='.$_POST['medio'].'" class="btn">Si</a>';
            } else{
                echo '<a href="boleta.php?fecha='.$fecha.'&total='.$total.'" class="btn">Si</a>';
            }

            
        ?>
            <a href="cart.php" class="btn">No</a>
        </div>
    </div>
</form>

<?php
include 'header.php';
echo $footer_html;
?>
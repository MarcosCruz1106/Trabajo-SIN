<?php
    include 'header2.php';
?>
<br>
<br>
<br>

<div class="container-fluid p-5 bg-primary text-white text-center">
    <h1>Carrito de compras</h1>
</div>
<!-- <br> -->
<div class="col-sm-12">
    <table class="table table-striped table-responsive">
        <thead class="table-primary">
            <tr>
                <td class="">Nombre</td>
                <td class="">Cantidad</td>
                <td class="">Precio unitario</td>
                <td class="">Subtotal</td>
                <td class="">&nbsp;</td>
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
                        echo $value["qty"];
                    echo '</td>';
                    echo '<td>';
                        echo $value["precio"];
                    echo '</td>';
                    echo '<td>';
                        echo 'S/. '.$value["precio"]*$value["qty"];
                    echo '</td>';
                    echo '<td>';
                        echo '<a href="remove_from_cart.php?id='.$key.'"><i class="fas fa-minus"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;';
                        echo '<a href="remove_from_cart.php?remove_all=1&id='.$key.'"><i class="fas fa-trash"></i></a>';
                    echo '</td>';
                echo '</tr>';
            }
        }
        
    ?>
            <tfoot class="table-primary">
                <tr class="success">
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Total</td>
                    <td>S/. <?php echo $total ?></td>
                    <td>&nbsp;</td>
                </tr>
            </tfoot>
        </tbody>
    </table>
</div>

<p>Medio de pago:</p>
<select name="medio_de_pago" id="medio" class="form-select" aria-label=".form-select-lg example" size="1">
    
    <?php
        $con2= mysqli_connect("localhost","root","","sin_grupo_2");
        $sql2 = "SELECT * FROM medios_de_pago";
        if($result2 = mysqli_query($con2, $sql2)){
            while ($row = mysqli_fetch_array($result2)){
                echo '<option value="'.$row['idMedio'].'">'.$row['nombre'].'</option>';
            }
        } 
    ?>
</select>

<?php
include 'header.php';
echo $footer_html;
?>
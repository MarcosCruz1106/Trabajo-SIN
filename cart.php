<?php
    include 'header2.php';
?>
<br>
<br>
<br>

<div class="container-fluid p-5 bg-primary text-white text-center">
    <h1>Carrito de compras</h1>
</div>

<div class="col-sm-12">
    <table class="table table-striped table-responsive">
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Cantidad</td>
                <td>Precio unitario</td>
                <td>Subtotal</td>
                <td>&nbsp;</td>
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
                    echo '<td>';
                        echo $value["qty"];
                    echo '</td>';
                    echo '<td>';
                        echo $value["precio"];
                    echo '</td>';
                    echo '<td>';
                        echo 'S/. '.$value["precio"]*$value["qty"];
                    echo '</td>';
                    echo '<td>';
                        echo '<a href="remove_from_cart.php?id='.$key.'"><i class="fas fa-minus"></i></a>&nbsp;&nbsp;';
                        echo '<a href="remove_from_cart.php?remove_all=1&id='.$key.'"><i class="fas fa-trash"></i></a>';
                    echo '</td>';
                echo '</tr>';
            }
        }
        
    ?>
            <tfoot>
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

<?php
include 'header.php';
echo $footer_html;
?>
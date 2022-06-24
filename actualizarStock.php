<?php
    if (isset($_SESSION["cart"])) {
        foreach ($_SESSION["cart"] as $key => $value) {
            $con4= mysqli_connect("localhost","root","","sin_grupo_2");
            $sql4 = "SELECT * FROM productos where idProducto = '".$key."'";
            $result4 = mysqli_query($con4, $sql4);
            $producto = mysqli_fetch_array($result4);

            $producto["stock"]=$producto["stock"]-$value["qty"];

            $sql5 = "UPDATE productos SET `stock` = '".$producto["stock"]."' WHERE idProducto = '".$key."'";
            $result5 = mysqli_query($con4, $sql5);

        }
    }
?>
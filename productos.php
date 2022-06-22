<?php
    include 'header2.php';
?>

<br>
<br>
<br>
<br>

<section class="productos" id="productos">
    <div class="box-container">

    <?php
        $con= mysqli_connect("localhost","root","","mydb");
        $sql= "SELECT * FROM productos ORDER BY stock DESC;";
        if ($result = mysqli_query($con, $sql)) {
            while ($row = mysqli_fetch_array($result)){
                echo '<div class="box">';
                    echo '<div class="image-container">';
                        echo '<img src="'.$row['imagen'].'" alt="">';
                        echo '<div class="info">';
                            echo '<h3>diseño único</h3>';
                            echo '<h3>nuevo</h3>';
                        echo '</div>';
                    echo '</div>';
                    echo '<div class="content">';
                        echo '<div class="price">';
                            echo '<h3>S/. '.$row['precio'].'</h3>';
                            echo '<a href="#" class="fas fa-heart"></a>';
                            echo '<a href="#" class="fas fa-phone"></a>';
                        echo '</div>';
                        echo '<div class="location">';
                            echo '<h3>'.$row['nombre'].'</h3>';
                            echo '<p>'.$row['detalle'].'</p>';
                        echo '</div>';
                        echo '<div class="buttons">';
                            echo '<a href="#" class="btn">Agregar al carrito</a>';
                            echo '<a href="#" class="btn">Ver producto</a>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
        }
    ?>

    </div>
</section>


<?php
    include 'header.php';
    echo $footer_html;
?>
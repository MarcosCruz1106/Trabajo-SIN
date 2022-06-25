<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="images/favicon.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/general.css">

    <title>TRABAJO SIN</title>
</head>
<body>


    <header class="header">
        <section class="flex">
            <a href="index.php" class="logo">Tiendamanía</a>
            <nav class="navbar">
                <a href="productos.php">Tienda</a>
                <a href="error7.php">Nosotros</a>
                <a href="error7.php">Contacto</a>
                <?php
                    session_start();
                    if(isset($_SESSION["usuario"])){
                        include ('db_conf.php');
                        $sql = "SELECT * FROM usuario where dni = '".$_SESSION["usuario"]."'";
                        $result = mysqli_query($con, $sql);
                        $user = mysqli_fetch_array($result);
                        if($user['tipoUsuario'] == 0){
                        }else{
                            echo '<a href="administrador.php">Administrador</a>';
                        }
                    }

                ?>
            </nav>
            <div class="icons">
                <div id="menu-btn" class="fas fa-bars"></div>
                <?php
                if(isset($_SESSION["cart"]) && count($_SESSION["cart"]) > 0){
                    echo '<span class="badge bg-secondary" style="padding:5px 8px; font-size:20px">'.count($_SESSION["cart"]).'</span>';
                }
                ?>
                <a href="cart.php"><i class="fas fa-shopping-cart"></i><span></span></a>
                <?php
                    if(isset($_SESSION["usuario"])){
                        $sql = "SELECT * FROM usuario where dni = '".$_SESSION["usuario"]."'";
                        $result = mysqli_query($con, $sql);
                        $user = mysqli_fetch_array($result);
                        echo '<p>Hola <a href="config.php">'.$user['usuario'].'</a></p>';

                    }else{
                        echo '<p>Hola <a href="login.php">usuario</a></p>';
                    }
                ?>
                <a href="config.php"><i class="fa-solid fa-gear"></i></a>
            </div>
        </section>

        <div class="profile">

            </div>

        </header>

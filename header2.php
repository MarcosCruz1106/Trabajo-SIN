<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="images/favicon.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/general.css">
    <script src="js/general.js"></script>

    <title>TRABAJO SIN</title>
</head>
<body>
    <?
        
    ?>

    <header class="header">
        <section class="flex">
            <a href="index.php" class="logo">Tiendamanía</a>
            <nav class="navbar">
                <a href="productos.php
                ">Productos</a>
                <a href="#">Nosotros</a>
                <a href="#">Contacto</a>
                <?php
                    session_start();
                    if(isset($_SESSION["usuario"])){
                        $con= mysqli_connect("localhost","root","","mydb");
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
                <a href="#"><i class="fas fa-shopping-cart"></i><span></span></a>
                <p>Hola <a href="login.php">
                <?php
                    if(isset($_SESSION["usuario"])){
                        $con= mysqli_connect("localhost","root","","mydb");
                        $sql = "SELECT * FROM usuario where dni = '".$_SESSION["usuario"]."'";
                        $result = mysqli_query($con, $sql);
                        $user = mysqli_fetch_array($result);
                        echo $user['usuario'];
                        
                    }else{
                        echo 'usuario';
                    }
                ?>
                </a></p>
                <a href="#"><i class="fas fa-user"></i><span></span></a>


            </div>
        </section>

        <div class="profile">
        
            </div>

        </header>
    
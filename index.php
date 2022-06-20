<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Formulario</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

</head>
<body>
    
    <h1>inicio</h1>

    <?php
    session_start();
    if(isset($_SESSION["usuario"])){
        $con= mysqli_connect("localhost","root","","mydb");
        $sql = "SELECT * FROM usuario where dni = '".$_SESSION["usuario"]."'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_array($result);
        if($user['tipoUsuario'] == 0){
            $rol="cliente";
        }else{
            $rol="administrador";
        }
        echo "Hola:  ". $user['usuario']." tu rol es: ".$rol;
        echo "&nbsp; ";
        echo "<a href='#'>Cerrar sesión</a>";
    }else{
        echo "<a href='#'>Ingresar</a>";
    }

    ?>
    
</body>
</html>
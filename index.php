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
    <section>
        <form action="validar.php" method="post">
        <h4> Login de Acceso </h4>
        <p> usuario <input type="text" name="usuario" id="usuario" placeholder="ingrese su usuario"> </p>
        <p> contraseña <input type="text" name="contraseña" id="contraseña" placeholder="ingrese su contraseña"> </p>  
        <input class="botons botoncito" type="submit" value="Ingresar">
    </section>
    
</body>
</html>
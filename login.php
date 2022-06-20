<?php
    include 'header.php';
    echo $header_html;
?>

<div class="container">
	<form action="autenticar.php" method="POST" class="login-email">
		<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
		<div class="input-group">
			<input type="text" placeholder="Usuario" name="usuario">
		</div>
		<div class="input-group">
			<input type="password" placeholder="Contraseña" name="password">
		</div>
		<div class="input-group">
			<button name="submit" class="btn">Ingresar</button>
		</div>
		<p class="login-register-text">¿No tienes cuenta? <a href="registro.php"> Registrate aquí</a>.</p>
		</form>
</div>

<?php
    echo $footer_html;
?>
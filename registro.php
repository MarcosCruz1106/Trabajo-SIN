<?php
    include 'header.php';
    echo $header_html;
?>

<div class="fondo">
	<div class="container">
		<form action="registrar.php" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Registro</p>
			<div class="input-group">
				<input type="text" placeholder="Nuevo Usuario" name="usuario">
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email">
			</div>
			<div class="input-group">
				<input type="text" placeholder="Dni" name="dni">
			</div>
			<div class="input-group">
				<input type="password" placeholder="Contraseña" name="password">
			</div>
			<div class="input-group">
				<input type="password" placeholder="Confirmar Contraseña" name="cpassword">
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Registrar</button>
			</div>
			<p class="login-register-text">¿Ya tienes cuenta? <a href="login.php">Inicia sesión </a>.</p>
		</form>
	</div>
</div>

<?php
    echo $footer_html;
?>
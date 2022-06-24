<?php
    include 'header.php';
    echo $header_html;
?>

<div class="detalle">
	<div class="container">
		<form action="edite.php" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800; margin-bottom: 5px">Editar perfil</p>
            <p style="font-size: 1rem; font-weight: 400; text-align:center;">Completa todos los espacios</p>
			<div class="input-group">
				<input type="text" placeholder="Usuario" name="usuario">
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email">
			</div>
			<div class="input-group">
				<input type="text" placeholder="Dni" name="dni">
			</div>
			<div class="input-group">
				<input type="text" placeholder="Nombres" name="nombre">
			</div>
			<div class="input-group">
				<input type="text" placeholder="Apellidos" name="apellidos">
			</div>
			<div class="input-group">
				<input type="password" placeholder="Contraseña" name="password">
			</div>
			<div class="input-group">
				<input type="password" placeholder="Confirmar Contraseña" name="cpassword">
			</div>
            <select name="tipoUsuario" id="medio" class="form-select" aria-label=".form-select-lg example" size="1">
                <option value="0">Cliente</option>
                <option value="1">Administrador</option>
            </select>
			<div class="input-group">
				<button name="submit" class="btn">Editar</button>
			</div>
			<p class="login-register-text">¿Ya tienes cuenta? <a href="login.php">Inicia sesión </a>.</p>
		</form>
	</div>
</div>

<?php
    echo $footer_html;
?>
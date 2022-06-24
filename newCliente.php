<?php
    include 'header.php';
    echo $header_html;
?>

<div class="detalle">
	<div class="container">
		<form action="registrar2.php" method="POST" class="login-email">
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
				<button name="submit" class="btn">Registrar</button>
			</div>
		</form>
	</div>
</div>

<?php
    echo $footer_html;
?>
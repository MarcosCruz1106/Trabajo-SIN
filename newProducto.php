<?php
    include 'header.php';
    echo $header_html;
?>

<div class="fondo">
	<div class="container">
		<form action="registrar3.php" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Registro</p>
			<div class="input-group">
				<input type="text" placeholder="Nombre del producto" name="nombre">
			</div>
			<div class="input-group">
				<input type="text" placeholder="Detalle" name="detalle">
			</div>
			<div class="input-group">
				<input type="number" placeholder="Stock" name="stock">
			</div>
			<div class="input-group">
				<input type="number" placeholder="Precio" name="precio">
			</div>
			<div class="input-group">
				<input type="text" placeholder="Url de imagen" name="imagen">
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Registrar</button>
			</div>
		</form>
	</div>
</div>

<?php
    echo $footer_html;
?>
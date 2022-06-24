<?php
    include 'header.php';
    echo $header_html;
?>

<div class="fondo">
	<div class="container">
		<form action="edite2.php" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Editar</p>
			<div class="input-group">
				<input type="text" placeholder="Nombre del producto" name="nombre">
			</div>
			<div class="input-group">
				<input type="text" placeholder="Detalle" name="detalle">
			</div>
			<select name="idProducto" id="medio" class="form-select" aria-label=".form-select-lg example" style="margin-bottom: 20px;" >
                <?php 
					echo '<option value="'.$_GET['id'].'">'.$_GET['id'].'</option>';
				?>
				<option value="<? echo $_GET['id'];?>"><? echo $_GET['id'];?></option>
            </select>

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
				<button name="submit" class="btn">Editar</button>
			</div>
		</form>
	</div>
</div>

<?php
    echo $footer_html;
?>
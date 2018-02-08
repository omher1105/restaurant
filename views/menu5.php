<?php include 'layout/header.php' ?>
<h1>Agregar Menu</h1>
<div class="row">
	<form action="../controllers/controller.php" method="POST">
	<div class="form-group">
		<label>Nombre del Plato</label>
		<input type="text" name="nompla">
	</div>
	<div class="form-group">
		<label>Precio</label>
		<input type="text" name="prepla">
	</div>
	<button type="submit">Agregar Plato</button>
	</form>
</div>
<?php include 'layout/footer.php' ?>
        
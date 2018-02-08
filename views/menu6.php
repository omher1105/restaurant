<?php 
	$listado = 1;
	if($listado == 1){
		$registros = array();
			if (($fichero = fopen("../files/menu.csv", "r")) !== FALSE) {
			    // Lee los nombres de los campos
			    $nombres_campos = fgetcsv($fichero, 0, ",", "\"", "\"");
			    $num_campos = count($nombres_campos);
			    // Lee los registros
			    while (($datos = fgetcsv($fichero, 0, ",", "\"", "\"")) !== FALSE) {
			        // Crea un array asociativo con los nombres y valores de los campos
			        for ($icampo = 0; $icampo < $num_campos; $icampo++) {
			            $registro[$nombres_campos[$icampo]] = $datos[$icampo];
			        }
			        // Añade el registro leido al array de registros
			        $registros[] = $registro;
			    }
			    fclose($fichero);

			

			}
	}
?>
<?php include 'layout/header.php' ?>
<h1>Menu del Dia</h1>
<?php foreach($registros as $registro){ ?>
	<div class="col-6">
		<b>PLATO DE FONDO</b>: <?php echo $registro['NOMBRE']; ?><br>
		<b>PRECIO</b>: S/. <?php echo $registro['PRECIO']; ?><br>
	</div>
	<br>
<?php } ?>
<?php include 'layout/footer.php' ?>
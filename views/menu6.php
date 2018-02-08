<?php 
	ini_set('default_charset', 'utf-8');
	header('Content-Type: text/html; charset=utf-8');
	$listado = 1;
	if($listado == 1){
		$registros = [];
			if (($fichero = fopen("../files/menu.csv", "r")) !== FALSE) {
			    // Lee los nombres de los campos
			    $nombres_campos = fgetcsv($fichero, 0, ",", "\"", "\"");
			    $num_campos = count($nombres_campos);
			    // Lee los registros
			    while (($datos = fgetcsv($fichero, 0, ",", "\"", "\"")) !== FALSE) {
			        // Crea un array asociativo con los nombres y valores de los campos
			        for ($icampo = 0; $icampo < 3; $icampo++) {
		        		$registro[$icampo] = $datos[$icampo];	
			        }
			        // Añade el registro leido al array de registros
			        $registros[] = $registro;
			    }
			    fclose($fichero);

			}

	}

	if (!function_exists('utf8_encode_deep')) {
    function utf8_encode_deep(&$input) {
        if (is_string($input)) {
            $input = utf8_encode($input);
        } else if (is_array($input)) {
            foreach ($input as &$value) {
                utf8_encode_deep($value);
            }
            unset($value);
        } else if (is_object($input)) {
            $vars = array_keys(get_object_vars($input));
            foreach ($vars as $var) {
                utf8_encode_deep($input->$var);
            }
        }
    }
}

	function debug() {
        $trace = debug_backtrace();
        $rootPath = dirname(dirname(__FILE__));
        $file = str_replace($rootPath, '', $trace[0]['file']);
        $line = $trace[0]['line'];
        $var = $trace[0]['args'][0];
        $lineInfo = sprintf('<div><strong>%s</strong> (line <strong>%s</strong>)</div>', $file, $line);
        $debugInfo = sprintf('<pre>%s</pre>', print_r($var, true));
        print_r($lineInfo . $debugInfo);
    }
?>
<?php include 'layout/header.php' ?>
<h1>Menu del Dia</h1>
<?php foreach($registros as $val){ ?>
	<div class="col-6">
		<b>PLATO DE FONDO</b>: <?php echo $val[1]; ?><br>
		<b>PRECIO</b>: S/. <?php echo $val[2]; ?><br>
	</div>
	<br>
<?php } ?>
<?php include 'layout/footer.php' ?>
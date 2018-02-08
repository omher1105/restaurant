<?php 

error_reporting(-1);
ini_set('display_errors', 'On');
//$opcion = $_REQUEST['peticion'];


if($_POST){
	//var_dump($_POST);
	$post = $_POST;
	if($post['nompla'] != '' && $post['prepla'] != ''){

		$registros = array();
		if (($fichero = fopen("../files/menu.csv", "r")) !== FALSE) {
		    // Lee los nombres de los campos
		    $nombres_campos = fgetcsv($fichero, 0, ",", "\"", "\"");
		    $num_campos = count($nombres_campos);
		    // Lee los registros
		    while (($datos = fgetcsv($fichero, 0, ",", "\"", "\"")) !== FALSE) {
		        // Crea un array asociativo con los nombres y valores de los campos
		        for ($icampo = 0; $icampo <= 2; $icampo++) {
		            $registro[$icampo] = $datos[$icampo];
		        }
		        // Añade el registro leido al array de registros
		        $registros[] = $registro;
		    }
		    fclose($fichero);
		}

		

		$results = array('0' => '1','1' => $post['nompla'],'2' => $post['prepla']);
		debug($results);
		$data = array_merge(array($results),$registros);

		debug($data);

		if(!$results){
			$file = fopen("../files/menu.csv", 'w');
			foreach ($data as $value) {
				$file->fputcsv($value);
			}
			return true;
			fclose($fp);
		}
		//header("Location: http://localhost/restaurant/views/menu0.php");
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
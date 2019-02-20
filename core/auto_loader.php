<?php 
//define('CORE_ROOT', dirname(__FILE__) . '/');
define('CORE_ROOT', dirname(__FILE__) . DIRECTORY_SEPARATOR);

spl_autoload_register(function($Clase){
	
	$Rutas = array(
            'clases/'
    );
	
	foreach($Rutas as $Archivos){
		$Ruta_clase = CORE_ROOT . $Archivos . $Clase;
		
		if (file_exists($Ruta_clase . '.php')) {
			include $Ruta_clase . '.php';
		}else{
			include 'Error.php';
		}
	}
	
});



?>
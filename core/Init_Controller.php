<?php 

require_once('auto_loader.php');


if (isset($_POST['Clase'])) {

	$Clase = $_POST['Clase'];
	$Metodo = $_POST['Metodo'];
	//$Argumentos = $_POST['Variables'];

	//echo '"'.$Argumentos.'"';

	$Argumentos = explode(",",$_POST['Variables']);

	//print_r($Argumentos);


	ManejadorProcesos($Clase, $Metodo, $Argumentos);
	
}


function ManejadorProcesos($Clase, $Metodo, $Argumentos) {
	$Class_Manager = new ClassController($Clase, $Metodo, $Argumentos);
}	




?>
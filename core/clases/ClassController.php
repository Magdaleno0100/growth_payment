<?php 

class ClassController{
	public $clase;
	public $metodo;
	public $variables;


	public function __construct($clase, $metodo, $variables){
		$this->clase = $clase;
		$this->metodo = $metodo;
		$this->variables = $variables;

		$this->Instanciador();
	}

	private function Instanciador(){

		$Instancia = new $this->clase();
		$metodo = $this->metodo;
		$Instancia->$metodo($this->variables);
	}



}//end class ClassController



?>
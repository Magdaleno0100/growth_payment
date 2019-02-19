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

		$Instancia = new $this->clase($this->variables);
		$metodo = $this->metodo;
		$Instancia->$metodo();

	}



}//end class ClassController



?>
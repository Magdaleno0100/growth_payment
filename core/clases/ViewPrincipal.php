<?php 

class ViewPrincipal{

	public $titulo;
	public $subtitulo;
	public $ruta_css = "css".DIRECTORY_SEPARATOR;
	public $ruta_js = "js".DIRECTORY_SEPARATOR;
	public $archivos_css;
	public $archivos_js;




	public function __construct($titulo, $subtitulo, $archivos_js, $archivos_css) {

		$this->titulo = $titulo;
		$this->subtitulo = $subtitulo;
		$this->archivos_js = $archivos_js;
		$this->archivos_css = $archivos_css;

		
	}

	public function createHead(){

		$data_html  = '<!DOCTYPE html>' . "\r\n";
		$data_html .= '<html>' . "\r\n";
		$data_html .= '<head>' . "\r\n";
		$data_html .= '<meta charset="utf-8">' . "\r\n";
		$data_html .= '<meta http-equiv="X-UA-Compatible" content="IE=edge">' . "\r\n";
		$data_html .= '<html>' . "\r\n";		
		$data_html .='<title>'.$this->titulo.'</title>' . "\r\n";

		  if (count($this->archivos_css) > 0) {
		  	foreach ($this->archivos_css as $archivo) {
		  		$data_html .= '<link rel="stylesheet" href="'.$this->ruta_css.$archivo.'.css">';
		  		$data_html .= "\r\n";
		  	}	
		  }
		  $data_html .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>';

		  $data_html .= '</head>' . "\r\n";

		  echo $data_html;

	}//end createHeader()




	public function createBody(){

		$data_html  = '<body>' . "\r\n";
		$data_html  .= '<header>' . "\r\n";
		$data_html  .= '</header>' . "\r\n";

		echo $data_html;

	}//End createBody()

	public function createFooter(){

		$data_html  = '<footer>' . "\r\n";
		$data_html  .= '</footer>' . "\r\n";
		if (count($this->archivos_js) > 0) {
		  	foreach ($this->archivos_js as $archivo) {
		  		$data_html .= '<script src="'.$this->ruta_js.$archivo.'.js"></script>';
		  		$data_html .= "\r\n";
		  	}	
		  }
		$data_html  .= '</body>' . "\r\n";
		$data_html  .= '</html>' . "\r\n";

		echo $data_html;

	}//end createFooter()




}//end ViewPrincipal



?>
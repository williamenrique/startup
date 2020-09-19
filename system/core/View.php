<?php
//definir clase vista
class View{
	//recibir parametros
	protected $template;
	protected $controller_name;
	protected $params;
	//array es por si se recibe una cadena vacia no de error
	public function __construct($controller_name, $params = array()){
		//igualar el valor de controller_name con el valor del constructor
		$this->controller_name = $controller_name;
		$this->params = $params;
		$this->render();
	}

	protected function render(){
		if (class_exists($this->controller_name)) {
			//sustitucion de caracteres
			//busque la cadena Controllerss la remplace por '' y le asigne el controller_name
			$file_name = str_replace('Controller', '', $this->controller_name);
			//
			$this->template = $this->getContentTemplate($file_name);
			echo $this->template;
		}else{
			throw new Exception("Error no existe {$this->controller_name}");
		}
	}
	//extraer el nombre del template
	protected function getContentTemplate($file_name){
		//aqui se arma la rta completa con carpeta de destino
		$file_path = ROOT. '/' . PATH_VIEWS . "$file_name/$file_name.php";
		//echo "PATH ". $file_path;
		//validar que existe el archivo
		if (is_file($file_path)) {
			extract($this->params);
			ob_start();
			require($file_path);//incluir el html y lo mantiene en el bufer y lo asigna al template
			$template = ob_get_contents();
			ob_end_clean();
			return $template;
		}else{
			throw new Exception("Error NO existe path");
			
		}
	}
}
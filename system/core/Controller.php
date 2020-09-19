<?php

abstract class Controller {

	private $view;
	// public function __construct(){
	// 	echo __CLASS__ .'instanciada';
	// }

	public function render($controller_name = '', $params = array()){
		//instancia de la clase view
		$this->view = new View($controller_name, $params);
	}
	abstract public function exec();
}
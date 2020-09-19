<?php 
defined('BASEPATH') or exit('No se permite acceso directo'); 

class ContactoController extends Controller {
	public function __construct(){

	}
	//metodo por default
	//recibe parametro por la uri
	public function exec(){
		$this->show();
	}
	public function show(){
		//recibira nombre de la clase y elparametro de clase heredada
		//modelo de como usarlo
		$params = array('nombre'=> 'William', 'titulo' => 'Contacto');
		$this->render(__CLASS__, $params);
	}
	
}
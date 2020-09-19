<?php
defined('BASEPATH') or exit('No se permite acceso directo');
require_once ROOT . PATH_MODEL.'home/HomeModel.php';

class HomeController extends Controller {
	
	private $model;
	public $nombre;

	public function __construct(){
		$this->model = new HomeModel();
		$this->nombre = 'Mundo';
	}

	//metodo por default
	//recibe parametro por la uri
	public function exec(){
		$this->show();
	}

	public function show(){
		//recibira nombre de la clase y elparametro de clase heredada
		//modelo de como usarlo
	 	$params = array('user' => $this->nombre);
		$this->render(__CLASS__, $params);
	}
	public function usuario($param){
    $res = $this->model->getUser($param);
    $this->nombre = $res['user'];
    $this->show();
  }
	
}
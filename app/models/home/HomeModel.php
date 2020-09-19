<?php
defined('BASEPATH') or exit('No se permite acceso directo'); 
class HomeModel extends Model{

	public function __construct(){
		parent:: __construct();
	}
	public function getUser($id){
		$sql = "SELECT * FROM usuario WHERE id_user = $id";
		return $this->db->query($sql)->fetch_array(MYSQLI_ASSOC);
		
	}
}
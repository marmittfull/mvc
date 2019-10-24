<?php
class ExemploModel extends MainModel
{

	
	public function teste(){
		/*var_dump($this->db);
		$resultado=$this->db->query("SELECT * FROM exemplo");
		print_r($resultado);
		$return = $resultado->fetchAll(PDO::FETCH_ASSOC);
		print_r($return);
		
		foreach($return AS $item){
			var_dump($item);
		*/
            
		$resultado=$this->db->SELECT("exemplo","where id=3");
		print_r($resultado);

		/*if($this->db->query("DELETE FROM exemplo WHERE id=1"))
			echo ":-)";
		else
			echo ":-(";*/
	}
}
<?php
class ExemploModel extends MainModel
{

	
	public function teste(){
		
            
		$resultado=$this->db->SELECT("exemplo","where id=3");
		return $resultado;

		
	}
}
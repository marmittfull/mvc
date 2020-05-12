<?php
class ExemploModel extends MainModel
{


	public function teste(){
		$sql="SELECT * FROM exemplo";
		$resultado=$this->db->query($sql, null);
	}

	public function select(){
		$result=$this->db->select("exemplo", null, null);
		return $result;
	}

	public function select2(){
		$cols[0]='teste';
		$result=$this->db->select("exemplo", $cols, null);
		return $result;
	}
	
	public function select3(){
		$cols[0]='teste';
		$where['id']=3;
		$result=$this->db->select("exemplo", $cols, $where);
		return $result;
	}

	public function insert(){
		$array[0]['teste']="Novo valor";
		$resultado=$this->db->insert("exemplo",$array);
	}
}
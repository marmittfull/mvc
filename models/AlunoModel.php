<?php

class AlunoModel extends MainModel{
    
    
    public function select($id=null){
		if($id){
			$where['id']=$id;
		}else{
			$where=null;
		}
		return $this->db->select("aluno", null, $where);
    }
    
    public function insert($aluno){
        $array[]=$aluno;
        return $resultado=$this->db->insert("aluno",$array);
    }
}
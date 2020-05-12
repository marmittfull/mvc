<?php
/**
 * home - Controller Aluno
 * @author Cândido Farias
 * @package mvc
 * @since 0.1
 */
class AlunoController extends MainController
{
	// URL: dominio.com/exemplo/
	public function index() {
		$dadosExemplo="Exemplo";
		/** Carrega os arquivos do view **/
		require PATH . '/views/includes/header.php';
       			
        require PATH . '/views/includes/menu.php';
		
		require PATH . '/views/aluno/index.php';
		
		require PATH . '/views/includes/footer.php';
	}
	
	

	public function listar(){
		$alunoModel=$this->load_model("aluno");
		$result=$alunoModel->select();
		
	}

	public function selecta(){
		$exemplo=$this->load_model("exemplo");
		$result=$exemplo->select2();
		print_r($result);
	}

	public function selectb(){
		$exemplo=$this->load_model("exemplo");
		$result=$exemplo->select3();
		print_r($result);
	}

}
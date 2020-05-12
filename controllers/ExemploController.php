<?php
/**
 * home - Controller de exemplo
 * @author Cândido Farias
 * @package mvc
 * @since 0.1
 */
class ExemploController extends MainController
{
	// URL: dominio.com/exemplo/
	public function index() {
		$dadosExemplo="Exemplo";
		/** Carrega os arquivos do view **/
		require PATH . '/views/includes/header.php';
       			
        require PATH . '/views/includes/menu.php';
		
		require PATH . '/views/exemplo/exemplo.php';
		
		require PATH . '/views/includes/footer.php';
	}
	
	// URL: dominio.com/exemplo/outra-acao
	public function teste() {
		$model=$this->load_model("Exemplo");
		
		$dadosExemplo=$model->teste();
		/** Carrega os arquivos do view **/
		require PATH . '/views/includes/header.php';
       			
        require PATH . '/views/includes/menu.php';
		require_once PATH . '/views/exemplo/exemplo.php';
		require PATH . '/views/includes/footer.php';
	}

	
	public function insert(){
		$exemplo=$this->load_model("exemplo");
		$result=$exemplo->insert();
		
	}

	public function select(){
		$exemplo=$this->load_model("exemplo");
		$result=$exemplo->select();
		print_r($result);
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
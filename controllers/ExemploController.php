<?php
/**
 * Exemplo - Controller de exemplo
 * @author Cândido Farias
 * @package mvc.controller
 * @since 0.1
 */
class ExemploController extends MainController
{
	/**
	 * URL: dominio.com/exemplo/
	 * 
	 * 
	 *  */ 
	public function index() {
		$this->title="Exemplo";
		$tituloPagina="Exemplo";
    $this->load_view('includes/menu');
		//require PATH . '/views/exemplo/index.php';
	}
	
	/**
	 * Método teste, com o objetivo de demonstrar a interação com Model
	 * URL: dominio.com/exemplo/outra-acao
	 *  */ 
	public function teste() {
		/**Instanciar um objeto da classe ExemploModel */
		$model=$this->load_model("Exemplo");
		
		$dadosExemplo=$model->teste();
		/** Carrega os arquivos do view **/
    $this->load_view('includes/menu');
		$this->load_view('exemplo/index');
	}
	

	public function select($id=null){
		$model=$this->load_model("exemplo");
		
		$dadosExemplo=$model->select($id);
		/** Carrega os arquivos do view **/
    $this->load_view('includes/menu');
		$this->load_view('exemplo/index');
	}
	
	public function insert(){
	
    $this->load_view('includes/menu');
		$exemplo=$this->load_model("exemplo");
		if($result=$exemplo->insert()){
			Sessao::mensagem('exemplo', 'Registro realizado!', 'alert alert-success');
		}else{
			Sessao::mensagem('exemplo', 'Falha ao realizar registro!', 'alert alert-danger');
		}
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
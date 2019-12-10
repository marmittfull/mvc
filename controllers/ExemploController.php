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
		$dadosExemplo="null";
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
}
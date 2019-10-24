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
		$dadosTeste="null";
		// Carrega o view
		require_once PATH . '/views/exemplo/exemplo.php';
	}
	
	// URL: dominio.com/exemplo/outra-acao
	public function teste() {
		$model=$this->load_model("Exemplo");
		
		$dadosTeste=$model->teste();
		require_once PATH . '/views/exemplo/exemplo.php';
	}
}
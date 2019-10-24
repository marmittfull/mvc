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
	echo ':-)';
		$model=$this->load_model("Exemplo");
		$model->teste();
		// Carrega o view
		//require_once PATH . '/views/exemplo/exemplo.php';
	}
	
	// URL: dominio.com/exemplo/outra-acao
	public function teste() {
		$model=$this->load_model("Exemplo");
		var_dump($model);
		$model->teste();
	}
}
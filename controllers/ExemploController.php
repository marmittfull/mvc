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
	
		
		// Carrega o view
		require_once PATH . '/views/exemplo/exemplo.php';
	}
	
	// URL: dominio.com/exemplo/outra-acao
	public function OutraAcao() {
		// Inclua seus models e views aqui
	}
}
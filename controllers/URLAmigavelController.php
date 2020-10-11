<?php
/**
 * home - Controller de exemplo
 *
 * @package mvc
 * @since 0.1
 */
class UrlAmigavelController extends MainController
{

	/**
	 * Carrega a página "/views/home/index.php"
	 * 
	 */
    public function index() {
		// Título da página
		$this->title = 'URL Amigável';
		
		// Essa página não precisa de modelo (model)
		
		/** Carrega os arquivos do view **/
		$this->load_view('includes/menu');
		$this->load_view('urlAmigavel/index');			
		
    } // index
	
} // class UrlAmigavelController
<?php
/**
 * home - Controller de exemplo
 *
 * @package mvc
 * @since 0.1
 */
class HomeController extends MainController
{

	/**
	 * Carrega a página "/views/home/index.php"
	 */
    public function index() {
		// Título da página
		$this->title = 'Home';
		
		// Parametros da função
		$parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();
	
		// Essa página não precisa de modelo (model)
		
		/** Carrega os arquivos do view **/
		PATH . '/views/includes/header.php';
		// /views/_includes/header.php
        require PATH . '/views/includes/header.php';
       		
		// /views/_includes/menu.php
        require PATH . '/views/includes/menu.php';
		
		// /views/home/home-view.php
        require PATH . '/views/home/home.php';
		
		// /views/_includes/footer.php
        require PATH . '/views/includes/footer.php';
		
    } // index
	
} // class HomeController
<?php
/**
 * NoticiasController - Controller de exemplo
 *
 * @package mvc.controller
 * @since 0.1
 */
class NoticiasController extends MainController
{

	/**
	 * $login_required
	 *
	 * Se a página precisa de login
	 *
	 * @access public
	 */
	public $login_required = false;

	/**
	 * $permission_required
	 *
	 * Permissão necessária
	 *
	 * @access public
	 */
	public $permission_required;


	/**
	 * Carrega a página "/views/noticias/index.php"
	 */
    public function index() {
		// Título da página
		$this->title = 'Notícias';
	
		// Carrega o modelo para este view
        $modelo = $this->load_model('noticias/noticias-adm-model');
				
		/** Carrega os arquivos do view **/
		
        $this->load_view('includes/menu');
				$this->load_view('noticias/noticias-view');
		
    } // index
	
	/**
	 * Carrega a página "/views/noticias/noticias-adm-view.php"
	 */
    public function adm() {
		// Page title
		$this->title = 'Gerenciar notícias';
		$this->permission_required = 'gerenciar-noticias';
		
		// Verifica se o usuário está logado
		if ( ! $this->logged_in ) {
		
			// Se não; garante o logout
			$this->logout();
			
			// Garante que o script não vai passar daqui
			return;
		
		}
		
		// Verifica se o usuário tem a permissão para acessar essa página
		if (!$this->check_permissions($this->permission_required, $this->userdata['user_permissions'])) {
		
			// Exibe uma mensagem
			echo 'Você não tem permissões para acessar essa página.';
			
			// Finaliza aqui
			return;
		}
	
		// Carrega o modelo para este view
        $modelo = $this->load_model('noticias/noticias-adm-model');
		
		/** Carrega os arquivos do view **/
			$this->load_view('includes/menu');
			$this->load_view('noticias/noticias-adm-view');
    } // adm
	
		/**
		 * Função para deslogar o usuário e direcioná-lo para a tela de login
		 */
		public function logout()
		{
			unset($_SESSION);
			session_destroy();
			Url::redirecionar('user/login');
		}

} // class NoticiasController
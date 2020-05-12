<?php
/**
 * ArmarioController - Controller de armários
 * @author Cândido Farias
 * @package cimol
 * @since 0.1
 */
class ArmarioController extends MainController
{

	/**
	 * Carrega a página "/views/user/index.php"
	 * @author Cândido Farias
	 */
    public function index() {
		// Título da página
		$this->title = 'Armários';
		/** Carrega os arquivos do view **/
		require PATH . '/views/includes/header.php';
       			
        require PATH . '/views/includes/menu.php';
		
		require PATH . '/views/armario/index.php';
		
		require PATH . '/views/includes/footer.php';

	} // index
	
	

    /**
	 * Lista armarios
	 * @author Cândido Farias
	 */
    public function listar($curso_id=null) {
		if(!$curso_id){
			$curso_id=$_SESSION['curso']['id'];
		}
		// Título da página
		$this->title = 'Armários';
		$armarioModel=$this->load_model("armario");
		$armarios=$armarioModel->listar($curso_id);
		echo json_encode($armarios);
	} // listar


	/**
	 * Lista armarios disponiveis
	 * @author Cândido Farias
	 */
    public function listarArmariosDisponiveis($curso_id=null) {
		if(!$curso_id){
			$curso_id=$_SESSION['curso']['id'];
		}
		// Título da página
		$this->title = 'Armários';
		$armarioModel=$this->load_model("armario");
		$armarios=$armarioModel->listarDisponiveis($curso_id);
		echo json_encode($armarios);
	} // listar

	/**
	 * Lista armarios com detalhes
	 * @author Cândido Farias
	 */
    public function listarComDetalhes($curso_id=null) {
		if(!$curso_id){
			$curso_id=$_SESSION['curso']['id'];
		}
		// Título da página
		$this->title = 'Armários';
		$armarioModel=$this->load_model("armario");
		$armarios=$armarioModel->listarComDetalhes($curso_id);
		echo json_encode($armarios);
	} // listar



	/**
	* Registra um novo armário
	* @author Cândido Farias
	*/
    public function registrarArmario() {
		// Título da página
		$this->title = 'Armários';
		$armarioModel=$this->load_model("armario");
		$armarios[]=$_POST['armario'];
		$resultado=$armarioModel->salvar($armarios);
		echo $resultado;
	} // registrarArmario

	/**
	* Registra o empréstimo do armario
	* @author Cândido Farias
	*/
    public function registrarEmprestimoArmario() {
		// Título da página
		$this->title = 'Armários';
		$armarioModel=$this->load_model("armario");
		$armarios=$armarioModel->registrarEmprestimo($_POST['emprestimo']);
		
	} // registrarEmprestimoArmario


	/**
	* Registra o empréstimo do armario
	* @author Cândido Farias
	*/
    public function registrarEntregaArmario() {
		// Título da página
		$this->title = 'Armários';
		$armarioModel=$this->load_model("armario");
		$armarios=$armarioModel->registrarEntrega($_POST['emprestimo']);
	} // registrarEntregaArmario

	/**
	* Exclui o armario
	* @author Cândido Farias
	*/
    public function ExcluirArmario() {
		$armarioModel=$this->load_model("armario");
		$armarios=$armarioModel->delete($_POST['armario']);
	} // registrarEntregaArmario




   
	
} // class UserController
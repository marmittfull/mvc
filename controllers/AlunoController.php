<?php
class AlunoController extends MainController{

    public function index(){
        include PATH."/views/includes/header.php";
        include PATH."/views/includes/menu.php";
        /*Carrega model do aluno */
        $model=$this->load_model("aluno");
        $alunos=$model->select();
        
        include PATH."/views/alunos/index.php";
  

        include PATH."/views/includes/footer.php";
    }

    public function add(){

        include PATH."/views/includes/header.php";
        include PATH."/views/includes/menu.php";
        include PATH."/views/alunos/form_aluno.php";
        include PATH."/views/includes/footer.php";
    }

    public function save(){
        if(isset($_POST['aluno']['enviar'])){
            $model=$this->load_model("aluno");
            unset($_POST['aluno']['enviar']);
            if($model->insert($_POST['aluno'])){
               
                /**Mensagem de erro */
                $msg['msg']="Registro salvo com sucesso!";
                $msg['class']="success";
            }else{
               
                /**Mensagem de erro */
                $msg['msg']="Falha ao realizar o registro!";
                $msg['class']="danger";
            }
            $_SESSION['msg'][]=$msg;
        }
        header("location:".HOME_URI."/aluno");
    }
}
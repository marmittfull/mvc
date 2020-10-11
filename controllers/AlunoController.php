<?php
class AlunoController extends MainController
{

    public function index()
    {
        $this->load_view('includes/menu');
        /*Carrega model do aluno */
        $model = $this->load_model("aluno");
        $alunos = $model->select();
        $this->load_view('alunos/index');
    }

    public function add()
    {

        $this->load_view('includes/menu');
        $this->load_view('alunos/form_aluno');
    }

    public function save()
    {
        if (isset($_POST['aluno']['enviar'])) {
            $model = $this->load_model("aluno");
            unset($_POST['aluno']['enviar']);
            if ($model->insert($_POST['aluno'])) {
                Sessao::mensagem('msg', 'Registro salvo com sucesso!', 'alert alert-success');
            } else {
                Sessao::mensagem('msg', 'Falha ao realizar registro!', 'alert alert-danger');
            }
        }
        Url::redirecionar('aluno');
    }
}

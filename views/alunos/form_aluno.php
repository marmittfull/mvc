<main>

<form action="<?=HOME_URI?>/aluno/save/" method="POST">
  <div class="form-group">
    <label for="InputNome">Nome do aluno</label>
    <input type="text" class="form-control" name="aluno[nome]" id="InputAluno" aria-describedby="NomeHelp" placeholder="Informe o nome do aluno">
    <small id="NomeHelp" class="form-text text-muted">Informe o nome completo do aluno.</small>
  </div>
  <div class="form-group">
    <label for="InputMatrica">Matrícula do aluno</label>
    <input type="text" name="aluno[matricula]"class="form-control" id="InputMatricula" aria-describedby="MatriculaHelp" placeholder="Número d ematricula">
    <small id="MatriculaHelp" class="form-text text-muted">Informe a matrícula do aluno.</small>
  </div>
  <div class="form-group">
    <label for="InputNome">Data de Nascimento</label>
    <input type="date" name="aluno[data_nascimento]" class="form-control" id="InputNascimento" aria-describedby="NascimentoHelp" >
    
  </div>
  
  <button type="submit" name="aluno[enviar]"class="btn btn-primary">Enviar</button>
</form>





</main>
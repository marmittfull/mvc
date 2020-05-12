<link rel="stylesheet" href="<?php echo HOME_URI;?>/views/armario/armario.css"/>
<script src="<?php echo HOME_URI;?>/views/armario/armario.js"></script>
<div id="botoes">
  <button type="button" id="novo-armario" class="btn btn-link"><i class='fas fa-plus-circle' style='font-size:36px'></i></button>
  <button type="button" class="btn btn-link"><i class='fas fa-key' style='font-size:36px'></i></button>
  <button type="button" class="btn btn-link"><i class='far fa-handshake' style='font-size:36px'></i></button>
  <button type="button" class="btn btn-link"><i class='fas fa-handshake' style='font-size:36px'></i></button>
</div>


<div id="registra-armario">
<button type="button" class="btn btn-link voltar">
  <i class='fas fa-arrow-left' style='font-size:24px'></i>
</button>

<input type="hidden" name="armario[curso_id]" id='curso-armario' value="<?php  echo $_SESSION['curso']['id'] ?>" >
  <div class="col-md-1 mb-1">
    <label for="exampleInputEmail1">Número</label>
    <input type="text" class="form-control" name="armario[numero]" id="numero-armario" >
 </div>
  
  <button type="submit" class="btn btn-primary" id="salvar-armario">Reistrar</button>

</div>

<div id="aluga-armario">
<form>
    <input type="hidden" name="armario[curso_id]" >
    <div class="form-group col-md-4">
      <label for="inputEstado">Aluno</label>
      <select id="select-aluno" name="armario[aluno_id]" class="form-control">
        <option selected>Escolher...</option>
        <option>Pedro Silva</option>
        <option>João Alves</option>
        <option>Luiz Oliveira</option>
      </select>
    </div>
    <div class="form-group col-md-1">
      <label for="inputEstado">Armário</label>
      <select id="select-numero-armario" name="armario[numero]" class="form-control">
        
      </select>
    </div>
  <div class="col-md-3 mb-3">
    <label for="exampleInputEmail1">Data Final</label>
    <input type="date" class="form-control" name="armario[data_fim]" id="data_final" placeholder="Data final">
    <small id="numero-armario-help" class="form-text text-muted">Informar o número do armário.</small>
  </div>
  
  <button type="submit" class="btn btn-primary">Reistrar</button>
</form>
</div>
<hr/>
<div id="armarios">
   
    <button type="button" class="btn btn-success">15</button>
    <button type="button" class="btn btn-info">8</button>
    <button type="button" class="btn btn-warning">10</button>
    <button type="button" class="btn btn-danger">12</button>
   
</div>


<?php if ( ! defined('PATH')) exit; ?>
	<main class="container">
		<form method="post" action="<?php echo HOME_URI ?>/user/autenticar">
			<div class="form-group">
				<label for="exampleInputEmail1">Endereço de email</label>
				<input type="email" name="user[email]"class="form-control" id="user-email" aria-describedby="emailHelp" placeholder="Seu email">
				<small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Senha</label>
				<input type="password" name="user[password]"class="form-control" id="user-password" placeholder="Senha">
			</div>
			
			<button type="submit" class="btn btn-primary btn-block">Enviar</button>
		</form>
	</main>
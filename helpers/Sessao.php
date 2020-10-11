<?php
class Sessao
{
  /**
   * Função para mostrar mensagens na tela do usuário.
   * @author Tiago Marmitt
   * @access public
   */
  public static function mensagem($nome, $texto = null, $classe = null)
  {
    //caso o nome fora passado como parâmetro
    if(!empty($nome)):
      //caso o usuário passou uma mensagem e o nome já não está em uso
      if(!empty($texto) && empty($_SESSION[$nome])):
        //declara uma session com o nome passado recebendo a mensagem
        $_SESSION[$nome] = $texto;
        //cria uma session com o nome passado.classe recebendo a classe passada
        $_SESSION[$nome.'classe'] = $classe;

        //caso a ideia seja exibir a mensagem e não cria-la basta passar um nome já em uso e nenhuma mensagem.
      elseif(empty($texto) && !empty($_SESSION[$nome])):
        //caso a mensagem não possua uma classe pré-definida utilizará por padrão alert-success
         $classe = !empty($_SESSION[$nome.'clase']) ? $_SESSION[$nome.'clase'] : 'alert alert-success';
         //mostra a msg na tela
         echo '<div class="'.$classe.'">'.$_SESSION[$nome].'</div>';
         //elimina a msg e sua classe após ser mostrada.
         unset($_SESSION[$nome]);
         unset($_SESSION[$nome.'classe']);
      endif;
    endif;
  }
}
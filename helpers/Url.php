<?php
class Url
{
  /**
   * Função para redirecionar o usuário para determinada tela.
   * @author Tiago Marmitt
   * @access public
   * 
   * Uso: Url::redirecionar(AlunoController/index);
   */
  public static function redirecionar($url)
  {
    header('Location'.HOME_URI.DIRECTORY_SEPARATOR.$url);
  }
}
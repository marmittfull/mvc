<?php
class ValidaForm{
  /**
   * Função para validar um input que receba nome e sobrenome.
   * @author Tiago Marmitt
   * @access public
   * @return boolean
   * 
   * Uso: ValidaForm::validarNome('exemplo exemplo')
   */
  public static function validarNome($nome)
  {
    $expressao = "^((\b[A-zÀ-ú']{2,40}\b)\s*){2,}$^";
    return preg_match($expressao, $nome);
  }

  /**
   * Função para valir um input que receba um email.
   * @author Tiago Marmitt
   * @access public
   * @return boolean
   * 
   * Uso: ValidaForm::validarEmail('exemplo@ex.ex')
   */
  public static function validarEmail($email)
  {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
  }
}
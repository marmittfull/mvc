<?php
/**
 * Verifica chaves de arrays
 *
 * Verifica se a chave existe no array e se ela tem algum valor.
 * Obs.: Essa função está no escopo global, pois, vamos precisar muito da mesma.
 *
 * @param array  $array O array
 * @param string $key   A chave do array
 * @return string|null  O valor da chave do array ou nulo
 */
function chk_array ( $array, $key ) {
	// Verifica se a chave existe no array
	if ( isset( $array[ $key ] ) && !empty( $array[ $key ] ) ) {
		// Retorna o valor da chave
		return $array[ $key ];
	}
	
	// Retorna nulo por padrão
	return null;
} // chk_array


/**
 * Função para carregar automaticamente todas as classes padrão
 * @see: http://php.net/manual/pt_BR/function.autoload.php.
 * As classes estão na pasta classes/.
 * O nome do arquivo deverá ser NomeDaClasse.php.
 * Exemplo: para a classe Main, o arquivo vai chamar Main.php
 */
// function __autoload($class_name) {
// 	$file = PATH . '/classes/' . $class_name . '.php';
	
// 	if (!file_exists( $file ) ) {
// 		require_once PATH . '/views/includes/404.php';
// 		return;
// 	}
	
// 	// Inclui o arquivo da classe
//     require_once $file;
// } // __autoload


/**
 * Função para carregar automaticamente todas as classes requisitadas.
 * @author Tiago Marmitt
 * 
 * Motivo substituição: função __autoload não deve ser mais utilizada, a partir da nova versão
 * do php é recomendada a função spl_autoload_register.
 */
spl_autoload_register(function ($classe) {
  $diretorios =
    [
      'classes',
      'helpers'
    ];

  foreach ($diretorios as $diretorio) {
    $arquivo = PATH . DIRECTORY_SEPARATOR . $diretorio . DIRECTORY_SEPARATOR . $classe . '.php';
    if (file_exists($arquivo)) :
      require_once $arquivo;
    endif;
  }
});
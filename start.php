<?php
// Evita que usuários acesse este arquivo diretamente
if (!defined('PATH')) exit;
 
// Verifica o modo para debugar
if (!defined('DEBUG') || DEBUG === false ) {

	// Esconde todos os erros
	error_reporting(0);
	ini_set("display_errors", 0); 
	
} else {

	// Mostra todos os erros
	error_reporting(E_ALL);
	ini_set("display_errors", 1); 
	
}


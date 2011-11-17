<?php

	// Constantes
	define('SGA_ROOT', dirname( plugin_basename( __FILE__ ) )) ;
	define('SGA_PLUGIN_TITLE', 'Simple Google Analytics') ; // Titre
	define('SGA_SETTINGS_AUTH', 'administrator') ;
	
	
	// Chargement automatique des classes
	function sga_autoload($className) {
		$filename = 'class/' . $className . '.class.php' ;
		if (file_exists($filename)) {
			@include_once($filename) ;
		}
	}
	spl_autoload_register('sga_autoload') ;

?>

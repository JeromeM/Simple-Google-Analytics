<?php
/*
Plugin Name: Simple Google Analytics
Plugin URI: http://www.arobase62.fr/2011/03/23/simple-google-analytics/
Description: A simple Plugin to add Analytics code on your pages. You simply enter your ID, you choose if you are on a sub-domain and add your domain name.
Version: 2.0.1
Author: Jerome Meyer
Author URI: http://www.arobase62.fr
*/
	
	// Chargement dynamique des classes
	@include('autoload.php') ;

	// Lancement des actions, filtres, ...
	new Actions ;
	
?>

<?php

	session_start();
	
	define("BASE", 'http://' . $_SERVER['HTTP_HOST'] . '/');
	define('ABSPATH', dirname(__FILE__) . '/');
	define('CLASS_PATH', ABSPATH . '../classes/');
	define('LANG', 'lang');
	
	if (!empty($_GET["l"])) {
		$locale = $_GET["l"];
		$_SESSION[LANG] = $locale;
	} else if (!empty($_SESSION[LANG])) {
		$locale = $_SESSION[LANG];
	}

	require_once CLASS_PATH . 'Localizer.class.php';
	load_default_textdomain();
	
	//session_unset();
	
?>
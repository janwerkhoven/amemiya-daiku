<?php

session_start();

define("BASE", 'http://' . $_SERVER['HTTP_HOST'] . '/');
define('ABSPATH', dirname(__FILE__) . '/');
define('CLASS_PATH', ABSPATH . 'classes/');
define('LANG', 'lang');

if (!empty($_GET["l"])) {
	$locale = $_GET["l"];
	$_SESSION[LANG] = $locale;
} else if (!empty($_SESSION[LANG])) {
	$locale = $_SESSION[LANG];
}

require_once CLASS_PATH . 'Localizer.class.php';
load_default_textdomain();

$ref = $_SERVER['HTTP_REFERER'];
$cut = str_split($ref,strpos($ref, "?"));
$goto = $cut[0] . "?l=" . $locale;
header("Location: $goto");

?>
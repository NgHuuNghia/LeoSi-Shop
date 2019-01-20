<?php
	require_once("public/uploads/load.php");
	require_once("application/config/const.php");
	$controller = empty($_GET['controller']) ? controllerDefault : $_GET['controller'];
	$action = empty($_GET['action']) ? actionDefault : $_GET['action'];
	Controller($controller,$action);

?>
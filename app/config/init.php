<?php
	require_once("../framework/database/database.php");
	require_once("../app/core/App.php");
	require_once("../app/core/Controller.php");
	$_SESSION["ShoppingCart"] = array();
	session_start();
	if (!isset($_SESSION["ShoppingCart"])) {
		
		$_SESSION["ShoppingCart"] = array();
	
	}

?>
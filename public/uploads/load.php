<?php
	
	// Hàm gọi controller
	function Controller($controller,$action){   
		$controllerName = $controller . 'Controller';
	    require_once('application/controllers/'.$controllerName.'.php');
	    $controllerClass = new $controllerName();
	    $controllerClass->$action();
	}
	// Hàm load View
	function View($view){
	    require_once('application/views/'.$view.'View.php');
	}
?>

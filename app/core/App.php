<?php
class App {

	protected $controller = controllerDefault;
	protected $method = methodDefault;
	protected $params = [];

	public function __construct(){

		$url = $this->parseUrl();

		if(file_exists('../app/controllers/'.$url[0].'Controller.php')){
			$this->controller = $url[0].'Controller';
			unset($url[0]);
		}

		require_once("../app/controllers/".$this->controller.".php");

		//new object controller (class)
		$this->controller = new $this->controller;

		if(isset($url[1])){

			if(method_exists($this->controller, $url[1])){
				$this->method = $url[1];
				unset($url[1]);
			}
		}
		
		// []$url only exist params
		$this->params = $url ? array_values($url) : [];

		// call action (method)
		call_user_func_array([$this->controller,$this->method], $this->params);

	}
	public function parseUrl(){

		if(isset($_GET['url'])){

			// $url[0] is controller, $url[1] is method, $url[2+] is param
			$url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
			return $url;
		}
	}
}
?>
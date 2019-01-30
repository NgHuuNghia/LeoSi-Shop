<?php

class HomeController extends Controller {
	public function index($name = 'default'){
		
		$productModel = $this->model('ProductModel');
		$arrayHeadPhone  = $productModel->getTopTrendProductHeadphone();
		$arrayMachineGame = $productModel->getTopTrendMachineGame();
		$arrayShirt = $productModel->getTopTrendShirt();
		$data = $arrayHeadPhone;
		$data = array_merge($data,$arrayMachineGame);
		$data = array_merge($data,$arrayShirt);		
		$this->view('home/index',$data);
		
	}
}

?>
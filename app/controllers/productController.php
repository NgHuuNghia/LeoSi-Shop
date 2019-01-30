<?php

class ProductController extends Controller {

	public function index() {

		//models

		//view
		
		$this->view('product/index');
	}

	public function detail($productId) {

		if($productId>0) { // if $id is type int 
		//models
			$productModel = $this->model('ProductModel'); // call method models

			$data = $productModel->getDetail($productId);
			// row  data = 0
			if($data!=false) {

				$categoryName = $productModel->getNameCategory($productId);
				
				$data = array_merge($data,$categoryName);

				$arrayColorProduct = $productModel->getColorProduct($productId);

				if($arrayColorProduct!=false) {
				$data = array_merge($data,$arrayColorProduct);
				}

				$this->view('product/detail',$data);
			}
			else {
				$this->view('eror/404');
			}
		}
		else {
			$this->view('eror/404');
		}
		
	}



}

?>
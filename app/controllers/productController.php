<?php

class ProductController extends Controller {

	public function index() {
		if(isset($_GET['sort_by'])) {
			$sort_type = $_GET['sort_by'];
			$productModel = $this->model('ProductModel');
			$data = $productModel->getAllProductSort($sort_type);
			//view
			$this->view('product/index',$data);
		}
		else {
			
			//models
			$productModel = $this->model('ProductModel');
			$data = $productModel->getAllProduct();
			//view
			$this->view('product/index',$data);
		}
		
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

				// Get ID product last 
				$_SESSION['currentIdProduct'] = $productId;
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
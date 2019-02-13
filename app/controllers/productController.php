<?php

class ProductController extends Controller {

	public function index() {
		if(isset($_GET['sort_by'])) {
			$sort_type = $_GET['sort_by'];
			$productModel = $this->model('ProductModel');
			$data = $productModel->getAllProductSort($sort_type);
			// last view product
			 if(isset($_SESSION['currentIdProduct'])) {

			 	$lastViewProduct = $productModel->getDetail2D($_SESSION['currentIdProduct']);
			 	$data = array_merge($data,$lastViewProduct);
			 }
			//view
			$this->view('product/index',$data);
		}
		else {
			
			//models
			$productModel = $this->model('ProductModel');
			$data = $productModel->getAllProduct();
			// last view product
			 if(isset($_SESSION['currentIdProduct'])) {

			 	$lastViewProduct = $productModel->getDetail2D($_SESSION['currentIdProduct']);
			 	$data = array_merge($data,$lastViewProduct);
			 }
			//view
			$this->view('product/index',$data);
		}
		
	}

	public function all($category) {

		//models
		$productModel = $this->model('ProductModel');
		$categoryNameVI = $productModel->getNameCategoryWithVietnameseName($category);
		$data = array('categoryNameVI' => $categoryNameVI );
		$data = array_merge($data,array('categoryName' => $category ));
		$dataProduct = $productModel->getAllProductForCategory($category);
		$data = array_merge($data,$dataProduct);
		if ($data != null) {
			// last view product
		 	if(isset($_SESSION['currentIdProduct'])) {

			 	$lastViewProduct = $productModel->getDetail2D($_SESSION['currentIdProduct']);
			 	$data = array_merge($data,$lastViewProduct);
		 	}
			//view
			$this->view('product/productForCategory',$data);
		}
		else {
			$this->view('eror/404');
		}
		
		
	}

	public function category() {
		if(isset($_GET['category_name']) && isset($_GET['sort_by'])) {
			$categoryName = $_GET['category_name'];
			$sortType = $_GET['sort_by'];
			$productModel = $this->model('ProductModel');
			$data = $productModel->getAllProductSortForCategory($categoryName,$sortType);
			// last view product
			 if(isset($_SESSION['currentIdProduct'])) {

			 	$lastViewProduct = $productModel->getDetail2D($_SESSION['currentIdProduct']);
			 	$data = array_merge($data,$lastViewProduct);
			 }
			//view
			$this->view('product/index',$data);
		}
		else {
			
			//models
			$productModel = $this->model('ProductModel');
			$data = $productModel->getAllProductForCategory();
			// last view product
			 if(isset($_SESSION['currentIdProduct'])) {

			 	$lastViewProduct = $productModel->getDetail2D($_SESSION['currentIdProduct']);
			 	$data = array_merge($data,$lastViewProduct);
			 }
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
				$categoryNameVI = $productModel->getNameCategoryWithVietnameseName($categoryName);
				$data = array_merge($data,array('category_name'=>$categoryName));
				$data = array_merge($data,array('category_name_vi'=>$categoryNameVI));
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
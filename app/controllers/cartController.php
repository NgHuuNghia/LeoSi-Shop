<?php 
/**
 * 
 */
class CartController extends Controller
{
	
	public function index(){
		//models
		$CartModel = $this->model('CartModel');
		$numProductPurchase = count($_SESSION["ShoppingCart"]);
		$cart = array();
		$priceTotalAllProduct = 0;
		for($i = 0 ; $i<$numProductPurchase ; $i++) {

			$ProductID = $_SESSION["ShoppingCart"][$i]['product_id'];
			$quantity =  $_SESSION["ShoppingCart"][$i]['quantity'];
			$dataProduct = $CartModel->getDetail($ProductID);
			$priceTotal = $dataProduct['price']*$quantity;
			$priceTotalAllProduct +=$priceTotal;
			$productPurchase = array(
									array('product_id' => $dataProduct['product_id'],
									      'quantity' => $quantity,
									      'product_name' => $dataProduct['product_name'],
									      'link_images' => $dataProduct['link_images'],
									      'priceTotal' => $priceTotal,
									  	 ) 
									);
			$cart = array_merge($cart,$productPurchase);
		}
		if ($numProductPurchase != 0 ) {
			$cart = array_merge($cart,array('priceTotalAllProduct' => $priceTotalAllProduct));
		}
		$data = $cart;
		//view
		$this->view('cart/index',$data);
		
	}

	public function removeProduct($productRemoveID){
		//models
		$CartModel = $this->model('CartModel');
		$numProductPurchase = count($_SESSION["ShoppingCart"]);

		for($i = 0 ; $i<$numProductPurchase ; $i++) {

			$ProductID = $_SESSION["ShoppingCart"][$i]['product_id'];
			if($productRemoveID == $ProductID ) {
				
				array_splice($_SESSION["ShoppingCart"], $i, 1);
				break;
			}
			
		}

		//view
		$indexCartUrl = ROOTURL.'/cart/index';
		header("Location: $indexCartUrl");
		
	}

	public function payment() {

		//models
		$CartModel = $this->model('CartModel');
		$numProductPurchase = count($_SESSION["ShoppingCart"]);
		$cart = array();
		$priceTotalAllProduct = 0;
		for($i = 0 ; $i<$numProductPurchase ; $i++) {

			$ProductID = $_SESSION["ShoppingCart"][$i]['product_id'];
			$quantity =  $_SESSION["ShoppingCart"][$i]['quantity'];
			$dataProduct = $CartModel->getDetail($ProductID);
			$priceTotal = $dataProduct['price']*$quantity;
			$priceTotalAllProduct +=$priceTotal;
			$productPurchase = array(
									array('product_id' => $dataProduct['product_id'],
									      'quantity' => $quantity,
									      'product_name' => $dataProduct['product_name'],
									      'link_images' => $dataProduct['link_images'],
									      'priceTotal' => $priceTotal,
									  	 ) 
									);
			$cart = array_merge($cart,$productPurchase);
		}
		if ($numProductPurchase != 0 ) {
			$cart = array_merge($cart,array('priceTotalAllProduct' => $priceTotalAllProduct));
		}
		$data = $cart;
		$this->view('cart/payment',$data);
	}
}

?>
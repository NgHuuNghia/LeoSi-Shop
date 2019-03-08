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
		//view
		$this->view('cart/payment',$data);
	}
	// public function updateDistrictForProvincial($provincial,$district) {

	// 	if($provincial != 'null') {

	// 		if($provincial == 'HCM') {

	// 		}
	// 	}
	// }
	public function orderReceived() {

		if ($_POST['name'] != '' && $_POST['email'] != '' && $_POST['paymentNumberPhone'] != '' && $_POST['addressRevice'] != '') {

			
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
			// if ($numProductPurchase != 0 ) {
			// 	$cart = array_merge($cart,array('priceTotalAllProduct' => $priceTotalAllProduct));
			// }
			$data = $cart;

			// create new oder 
			$OderModel = $this->model('OderModel');
			$name = $_POST['name'];
			$email = $_POST['email'];
			$numberPhone = $_POST['paymentNumberPhone'];
			$address = $_POST['addressRevice'];
			$shippingMethod = "giao hàng tận nơi";
			$paymentMethod = "thanh toán khi nhận hàng";
			$transportFee = 40000;
			$priceTotal = $priceTotalAllProduct + $transportFee;
			$lastIdOrder = $OderModel->insertOrder($name,$email,$numberPhone,$address,$shippingMethod,$paymentMethod,$transportFee,$priceTotal);
			$oderDay = $OderModel->getOrderDay($lastIdOrder);
			// add  oderdetail
			for ($i=0; $i < $numProductPurchase ; $i++) { 
				$productId = $data[$i]['product_id'];
				$quantity = $data[$i]['quantity'];
				$OderModel->insertOrderDetail($lastIdOrder,$productId,$quantity);
			}
			// orderReceived page
			$OrderReceivedData = array(); 
			$OrderReceivedData = $data ;
			$OrderReceivedData = array_merge($OrderReceivedData, array('transport_fee' => $transportFee));
			$OrderReceivedData = array_merge($OrderReceivedData, array('price_total' => $priceTotal));
			$OrderReceivedData = array_merge($OrderReceivedData, array('payment_method' => $paymentMethod));
			$OrderReceivedData = array_merge($OrderReceivedData, array('order_day' => $oderDay));
			$OrderReceivedData = array_merge($OrderReceivedData, array('order_id' => $lastIdOrder));
			 // load page -> 404
			// reset shopping cart
			if($_SESSION["ShoppingCart"] == null ) {

				$this->view('eror/404');
			} else {

				$_SESSION["ShoppingCart"] = array();
				$this->view('order/orderReceived',$OrderReceivedData);
			}
			
			//view
			

		}
		else {
			 $paymentCartUrl = ROOTURL.'/cart/payment';
			 header("Location: $paymentCartUrl");
		}
	}
}

?>
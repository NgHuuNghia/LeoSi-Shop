<?php

class OderModel extends database {

	public function insertOrder($name,$email,$numberPhone,$address,$shippingMethod,$paymentMethod,$transportFee,$priceTotal) {

		 $this->query("INSERT INTO orders(customer_name,customer_email,customer_numberphone,customer_address,shipping_method,payment_method,transport_fee,price_total) VALUES ('$name','$email',$numberPhone,'$address','$shippingMethod','$paymentMethod',$transportFee,$priceTotal)");
		$lastId = $this->query("SELECT MAX(order_id) FROM orders");
		return $lastId['MAX(order_id)'];
	}

	public function insertOrderDetail ($orderId,$productId,$quantity) {

		 $this->query("INSERT INTO orderdetails(order_id,product_id,quantity) VALUES ($orderId,$productId,$quantity)");
		// $lastId = $this->query("SELECT MAX(id) FROM orderdetails");
		// return $lastId['MAX(id)'];
	}
	public function getOrderDay ($orderId) {

		$orderDay =  $this->query("SELECT order_day FROM orders WHERE order_id = $orderId");
		return $orderDay['order_day'];
	}

}

?>
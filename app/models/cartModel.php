<?php

class CartModel extends database {

	public function getDetail($productId) {

		return $this->query("SELECT * FROM products WHERE product_id = $productId ");
	}
	// return [i][data]
	public function getDetail2D($productId) {

		return $this->query2D("SELECT * FROM products WHERE product_id = $productId ");
	}
	

}

?>
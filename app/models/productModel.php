<?php

/**
 * 
 */
class ProductModel extends database {

	var $productId;
	var $productName;
	var $categoryId;
	var $quantity;
	var $color;
	var $detail; 

	public function getDetail($productId) {

		return $this->query("SELECT * FROM products WHERE product_id = $productId ");
	}

	public function getNameCategory($productId) {

		return $this->query("SELECT c.category_name FROM products p join categories c on p.category_id = c.category_id WHERE p.product_id = $productId");
	}

	public function getColorProduct($productId) {

		return $this->query2D("SELECT color_name FROM colors WHERE product_id = $productId");
	}

	public function getTopTrendProductHeadphone() {
		return $this->query2D("SELECT p.*,COUNT(od.product_id) FROM orders od join products p on od.product_id = p.product_id AND od.category_id=1 GROUP BY od.product_id LIMIT 4");
	}

	public function getTopTrendMachineGame() {
		return $this->query2D("SELECT p.*,COUNT(od.product_id) FROM orders od join products p on od.product_id = p.product_id AND od.category_id=2 GROUP BY od.product_id LIMIT 4");
	}

	public function getTopTrendShirt() {
		return $this->query2D("SELECT p.*,COUNT(od.product_id) FROM orders od join products p on od.product_id = p.product_id AND od.category_id=3 GROUP BY od.product_id LIMIT 4");
	}
}

?>
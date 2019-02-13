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

	public function getAllProduct() {

		return $this->query2D("SELECT * FROM products");
	}
	
	public function getAllProductSort ($sort_type) {
		//PriceAscending
		if ($sort_type == 'price-ascending') {
			return $this->query2D("SELECT * FROM products order by price ASC");
		}
		//PriceDescending
		else if ($sort_type == 'price-descending') {
			return $this->query2D("SELECT * FROM products order by price DESC");
		}
		// new product
		else if ($sort_type == 'new') {
			return $this->query2D("SELECT * FROM products order by create_at DESC");
		}
		else if ($sort_type == 'old') {
			return $this->query2D("SELECT * FROM products order by create_at ASC");
		}
		else if ($sort_type == 'a-z') {
			return $this->query2D("SELECT * FROM products order by product_name DESC");
		}
		else if ($sort_type == 'z-a') {
			return $this->query2D("SELECT * FROM products order by product_name ASC");
		}
		else if ($sort_type == 'best-selling') {
			return $this->query2D("SELECT p.*,COUNT(od.product_id) FROM orders od join products p on od.product_id = p.product_id GROUP BY od.product_id ");
		}
		else {
			return $this->query2D("SELECT * FROM products");
		}
		
	}

	public function getAllProductSortForCategory ($category_name,$sort_type) {

		//change name category no sign to vietnamese
		if ($category_name == 'tai-nghe') {
			$category_name =  'Tai Nghe';
		}
		else if ($category_name == 'may-choi-game') {
			$category_name =  'Máy chơi game';
		}
		else if ($category_name == 'phu-kien-dien-thoai') {
			$category_name =  'Phụ kiện điện thoại';
		}
		else if ($category_name == 'ao-ttg') {
			$category_name =  'Áo TTG';
		}
		else { //  if ($category_name == 'gaming-gear') 
			$category_name =  'Gaming gear';
		}
		// ** SORT
		//PriceAscending
		if ($sort_type == 'price-ascending') {
			return $this->query2D("SELECT * FROM products p join categories c on p.category_id = c.category_id WHERE c.category_name = '$category_name' order by p.price ASC");
		}
		//PriceDescending
		else if ($sort_type == 'price-descending') {
			return $this->query2D("SELECT * FROM products p join categories c on p.category_id = c.category_id WHERE c.category_name = '$category_name' order by p.price DESC");
		}
		// new product
		else if ($sort_type == 'new') {
			return $this->query2D("SELECT * FROM products p join categories c on p.category_id = c.category_id WHERE c.category_name = '$category_name' order by p.create_at DESC");
		}
		else if ($sort_type == 'old') {
			return $this->query2D("SELECT * FROM products p join categories c on p.category_id = c.category_id WHERE c.category_name = '$category_name' order by p.create_at ASC");
		}
		else if ($sort_type == 'a-z') {
			return $this->query2D("SELECT * FROM products p join categories c on p.category_id = c.category_id WHERE c.category_name = '$category_name' order by p.product_name DESC");
		}
		else if ($sort_type == 'z-a') {
			return $this->query2D("SELECT * FROM products p join categories c on p.category_id = c.category_id WHERE c.category_name = '$category_name' order by p.product_name ASC");
		}
		else if ($sort_type == 'best-selling') { 
			return $this->query2D("SELECT p.*,COUNT(od.product_id) FROM orders od join products p on od.product_id = p.product_id join categories c on p.category_id = c.category_id WHERE c.category_name = '$category_name' GROUP BY od.product_id ");
		}
		else {
			return $this->query2D("SELECT * FROM products");
		}
		
	}

	public function getAllProductForCategory($category) {

		//head-phone
		if ($category == 'tai-nghe') {
			return $this->query2D("SELECT * FROM products p join categories c on p.category_id = c.category_id WHERE c.category_name = 'Tai Nghe'");
		}
		else if ($category == 'may-choi-game') {
			return $this->query2D("SELECT * FROM products p join categories c on p.category_id = c.category_id WHERE c.category_name = 'Máy chơi game'");
		}
		else if ($category == 'phu-kien-dien-thoai') {
			return $this->query2D("SELECT * FROM products p join categories c on p.category_id = c.category_id WHERE c.category_name = 'Phụ kiện điện thoại'");
		}
		else if ($category == 'ao-ttg') {
			return $this->query2D("SELECT * FROM products p join categories c on p.category_id = c.category_id WHERE c.category_name = 'Áo TTG'");
		}
		else if ($category == 'gaming-gear') {
			return $this->query2D("SELECT * FROM products p join categories c on p.category_id = c.category_id WHERE c.category_name = 'Gaming gear'");
		}
		else {
			return null;
		}
		
	}

	public function getNameCategoryWithVietnameseName($category) {

		//head-phone
		if ($category == 'tai-nghe') {
			return 'Tai Nghe';
		}
		else if ($category == 'may-choi-game') {
			return 'Máy chơi game';
		}
		else if ($category == 'phu-kien-dien-thoai') {
			return 'Phụ kiện điện thoại';
		}
		else if ($category == 'ao-ttg') {
			return 'Áo TTG';
		}
		else if ($category == 'gaming-gear') {
			return 'Gaming gear';
		}
		else {
			return 'Tất cả sản phẩm';
		}
		
	}

	public function getDetail($productId) {

		return $this->query("SELECT * FROM products WHERE product_id = $productId ");
	}
	// return [i][data]
	public function getDetail2D($productId) {

		return $this->query2D("SELECT * FROM products WHERE product_id = $productId ");
	}

	public function getNameCategory($productId) {

		$categoryName = $this->query("SELECT c.category_name FROM products p join categories c on p.category_id = c.category_id WHERE p.product_id = $productId");
		
		if ($categoryName['category_name'] == 'Tai Nghe') {
			return 'tai-nghe';
		}
		else if ($categoryName['category_name'] == 'Máy chơi game') {
			return 'may-choi-game';
		}
		else if ($categoryName['category_name'] == 'Phụ kiện điện thoại') {
			return 'phu-kien-dien-thoai';
		}
		else if ($categoryName['category_name'] == 'Áo TTG') {
			return 'ao-ttg';
		}
		else  { //if ($categoryName == 'Gaming gear')
			return 'gaming-gear';
		}
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
<?php

/**
 * 
 */
class CategoryModel extends database {

	public function getNameCategory($categoryId) {

		return $this->query("SELECT category_name FROM categories WHERE category_id = $categoryId ");
	}

}

?>
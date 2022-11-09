<?php 
include_once("../settings/db_class.php");

class product extends db_connection {

	//--PRODUCT--//
	function addProduct($product_cat, $product_brand, $product_title, $product_price, $product_desc, $product_image, $product_keywords) {
		$sql = "INSERT INTO products(product_cat, product_brand, product_title, product_price, product_desc, product_image, product_keywords) VALUES ($product_cat, $product_brand, '$product_title', $product_price, '$product_desc', '$product_image', '$product_keywords')";
		echo $sql;
		return $this->db_query($sql);
	}

	function editProduct($product_id, $product_cat, $product_brand, $product_title, $product_price, $product_desc, $product_image, $product_keywords) {
		$sql = "UPDATE products SET product_cat=$product_cat, product_brand=$product_brand, product_title='$product_title', product_price=$product_price, product_desc='$product_desc', product_image='$product_image', product_keywords='$product_keywords' WHERE product_id=$product_id";
		return $this->db_query($sql);
	}

	function getAllProducts() {
		$sql = "SELECT * FROM products";
		return $this->db_fetch_all($sql);
	}

	function getAllProductsLimit($start, $end) {
		$sql = "SELECT * FROM products LIMIT $start, $end";
		return $this->db_fetch_all($sql);
	}

	function getProductLikeLimit($start, $end, $like) {
		$sql = "SELECT * FROM products WHERE product_title LIKE '%$like%' LIMIT $start, $end";
		return $this->db_fetch_all($sql);
	}

	function getAllProductsLike($like) {
		$sql = "SELECT * FROM products WHERE product_title LIKE '%$like%' OR product_keywords LIKE '%$like%'";
		return $this->db_fetch_all($sql);
	}


	function getProduct($product_id) {
		$sql = "SELECT * FROM products WHERE product_id=$product_id";
		return $this->db_fetch_one($sql);
	}


	//--BRAND--//
	function addProductBrand($brandName) {
		$sql = "INSERT INTO brands(brand_name) VALUES ('$brandName')";
		return $this->db_query($sql);
	}

	function editProductBrand($brandId, $newBrandName) {
		$sql = "UPDATE brands SET brand_name = '$newBrandName' WHERE brand_id = $brandId";
		return $this->db_query($sql);
	}

	function getAllBrands() {
		$sql = "SELECT * FROM brands";
		return $this->db_fetch_all($sql);
	}

	function getBrandName($brandId) {
		$sql = "SELECT * FROM brands WHERE brand_id=$brandId";
		return $this->db_fetch_one($sql);
	}


	//--CATEGORY--//
	function addProductCategory($categoryName) {
		$sql = "INSERT INTO categories(cat_name) VALUES ('$categoryName')";
		return $this->db_query($sql);
	}

	function editProductCategory($categoryId, $categoryName) {
		$sql = "UPDATE categories SET cat_name='$categoryName' WHERE cat_id=$categoryId";
		return $this->db_query($sql);
	}

	function getAllCategories() {
		$sql = "SELECT * FROM categories";
		return $this->db_fetch_all($sql);
	}

	function getCategoryName($categoryId) {
		$sql = "SELECT * FROM categories WHERE cat_id=$categoryId";
		return $this->db_fetch_one($sql);
	}
}


?>
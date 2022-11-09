<?php 
include_once("../classes/product_class.php");

//--PRODUCT--//
function addProduct($product_cat, $product_brand, $product_title, $product_price, $product_desc, $product_image, $product_keywords) {
	$product = new product();
	return $product->addProduct($product_cat, $product_brand, $product_title, $product_price, $product_desc, $product_image, $product_keywords);
}


function editProduct($product_id, $product_cat, $product_brand, $product_title, $product_price, $product_desc, $product_image, $product_keywords) {
	$product = new product();
	return $product->editProduct($product_id, $product_cat, $product_brand, $product_title, $product_price, $product_desc, $product_image, $product_keywords);
}

function getAllProducts() {
	$product = new product();
	return $product->getAllProducts();
}

function getAllProductsLimit($start, $end) {
	$product = new product();
	return $product->getAllProductsLimit($start, $end);
}

function getProductLikeLimit($start, $end, $like) {
	$product = new product();
	return $product->getProductLikeLimit($start, $end, $like);
}

function getProductsLike($like) {
	$product = new product();
	return $product->getAllProductsLike($like);
}

function getProduct($product_id) {
	$product = new product();
	return $product->getProduct($product_id);
}


//--BRAND--//
function addProductBrand($brandName) {
	$product = new product();
	return $product->addProductBrand($brandName);
}

function editProductBrand($brandId, $updatedBrandName) {
	$product = new product();
	return $product->editProductBrand($brandId, $updatedBrandName);
}

function getAllBrands() {
	$product = new product();
	return $product->getAllBrands();
}

function getBrandName($brandId) {
	$product = new product();
	return $product->getBrandName($brandId);
} 


//--CATEGORY--//
function addProductCategory($categoryName) {
	$product = new product();
	return $product->addProductCategory($categoryName);
}

function editProductCategory($categoryId, $categoryName) {
	$product = new product();
	return $product->editProductCategory($categoryId, $categoryName);
}

function getAllCategories() {
	$product = new product();
	return $product->getAllCategories();
}

function getCategoryName($categoryId) {
	$product = new product();
	return $product->getCategoryName($categoryId);
}

?>
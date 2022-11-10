<?php
include_once("../controllers/cart_controller.php");



function get_cart_products($customer_id) {
	$products = get_products_from_cart($customer_id);
	// print_r($products);
	return $products;
}

?>
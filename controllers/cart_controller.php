<?php 
include_once("../classes/cart_class.php");


function add_to_cart($product_id, $client_ip, $customer_id, $quantity=1) {
	$cart = new cart();
	return $cart->add_to_cart($product_id, $client_ip, $customer_id, $quantity);
}


function get_cart_count($customer_id) {
	$cart = new cart();
	return $cart->get_cart_count($customer_id);
}

function get_cart_count_with_ip($customer_ip) {
	$cart = new cart();
	return $cart->get_cart_count_ip($customer_ip);
}


function get_products_from_cart($customer_id) {
	$cart = new cart();
	return $cart->get_products_from_cart($customer_id);
}

function get_products_from_cart_with_ip($customer_ip) {
	$cart = new cart();
	return $cart->get_products_from_cart_ip($customer_ip);	
}

?>
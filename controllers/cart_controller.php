<?php 
include_once("../classes/cart_class.php");


function add_to_cart($product_id, $client_ip, $customer_id, $quantity=1) {
	$cart = new cart();
	return $cart->add_to_cart($product_id, $client_ip, $customer_id, $quantity);
}

function remove_from_cart($product_id, $customer_id) {
	$cart = new cart();
	return $cart->remove_from_cart($product_id, $customer_id);
}

function remove_from_cart_with_ip($product_id, $customer_ip) {
	$cart = new cart();
	return $cart->remove_from_cart_ip($product_id, $customer_ip);
}

function update_cart($product_id, $customer_id, $new_qty) {
	$cart = new cart();
	return $cart->update_cart($product_id, $customer_id, $new_qty);
}

function update_cart_with_ip($product_id, $customer_ip, $new_qty) {
	$cart = new cart();
	return $cart->update_cart_ip($product_id, $customer_ip, $new_qty);
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


function insert_order($customer_id, $invoice_no, $order_date, $order_status) {
	$cart = new cart();
	return $cart->insert_order($customer_id, $invoice_no, $order_date, $order_status);
}

function select_order($customer_id, $invoice_no) {
	$cart = new cart();
	return $cart->select_order($customer_id, $invoice_no);
}

function empty_cart($customer_id) {
	$cart = new cart();
	return $cart->empty_cart($customer_id);
}

function insert_payment($amount, $customer_id, $order_id, $currency, $payment_date) {
	$cart = new cart();
	return $cart->insert_payment($amount, $customer_id, $order_id, $currency, $payment_date);
}

function insert_order_details($order_id, $product_id, $quantity) {
	$cart = new cart();
	return $cart->insert_order_details($order_id, $product_id, $quantity);
}
?>
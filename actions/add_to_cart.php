<?php
include_once("../settings/core.php");
include_once("../controllers/cart_controller.php");

if(isset($_POST["add_to_cart"])) {
	$product_id = $_POST["product_id"];
	$customer_id = $_POST["customer_id"];
	
	$status = add_to_cart($product_id, getIpAddress(), $customer_id);

	echo $status[1];
}


?>
<?php
include_once("../settings/core.php");
include_once("../controllers/cart_controller.php");


if(isset($_POST["remove_from_cart"])) {

	$product_id = $_POST["product_id"];
	$customer_id = $_POST['customer_id'];

	if($customer_id != -1) {
		if(remove_from_cart($product_id, $customer_id)) {
			echo "YES";
		} else {
			echo "NO";
		}
	} else {
		$customer_ip = getIpAddress();
		if(remove_from_cart_with_ip($product_id, $customer_ip)) {
			echo "YES";
		} else {
			echo "NO";
		}

	}
}
?>
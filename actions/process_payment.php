<?php
include_once("../settings/core.php");
include_once("../classes/cart_class.php");
include_once("../controllers/cart_controller.php");
// save in orders table *
// save in payment table *
// move cart to order_details table *
// delete from cart *
// redirect to payment success/fail

if(isset($_POST["ref"])) {
	$ref_number = $_POST["ref"];

	$invoice_no = mt_rand(1000000, 9000000);
	$customer_id = getUserId();
	$amount = $_POST['amount'];
	$currency = "GHC";
	$current_date = date("Y-m-d");


	insert_order($customer_id, $invoice_no, $current_date, "success");
	$order_id = select_order($customer_id, $invoice_no);
	insert_payment($amount, $customer_id, $order_id, $currency, $current_date);

	$products_in_cart = get_products_from_cart($customer_id);
	foreach($products_in_cart as $product) {
		$product_id = $product["p_id"];
		$quantity = $product["qty"];
		insert_order_details($order_id, $product_id, $quantity);
	}

	empty_cart($customer_id);

	echo "YES";
	//header("Location: ../view/payment_success.php");
} else {
	echo "NO";
	// header("Location: ../view/cart.php");
}
?>
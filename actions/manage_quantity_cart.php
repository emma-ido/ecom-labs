<?php
include_once("../settings/core.php");
include_once("../controllers/cart_controller.php");


if(isset($_POST["manage_quantity_cart"])) {
	$product_id = $_POST["product_id"];
	$customer_id = $_POST['customer_id'];
	$new_qty = $_POST['new_qty'];

	if($customer_id != -1) {
		update_cart($product_id, $customer_id, $new_qty);
		echo "<script>
		alert('Successfuly updated cart');
		window.location.href='../view/cart.php';
		</script>";
	} else {
		update_cart_with_ip($product_id, getIpAddress(), $new_qty);
		echo "<script>
		alert('Successfuly updated cart');
		window.location.href='../view/cart.php';
		</script>;";
	}
}

?>
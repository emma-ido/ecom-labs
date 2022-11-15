<?php
include_once("../controllers/cart_controller.php");
include_once("../actions/product_functions.php");


function get_cart_products($customer_id) {
	$products = get_products_from_cart($customer_id);
	return $products;
}


function display_cart_products($customer_id) {
	$products = get_products_from_cart($customer_id);

	$total_quantity = 0;
	$total_price = 0;
	$html = "";
	foreach ($products as $cart_product) {
		$product_id = $cart_product["p_id"];
		$product = getSingleProduct($product_id);
		$qty = $cart_product['qty'];
		$unit_price = $product['product_price'];
		$total_quantity += $qty;

		$total_price += $qty * $unit_price;
		
		$total_for_product = $qty * $unit_price;
		$product_title = $product["product_title"];
		$html .= "<br>
			<div class='row' style='text-align: center;'>
				<div class='col'>
					$product_title
				</div>
				<div class='col'>
					$unit_price
				</div>
				<div class='col'>
					$qty
				</div>
				<div class='col'>
					$total_for_product
				</div>
			</div>
		";
	}

	$html .= "
	<hr>
	<div class='row' style='text-align: center;'>
		<div class='col'>
		-
		</div>
		<div class='col'>
		-
		</div>
		<div class='col'>
		$total_quantity
		</div>
		<div class='col'>
		$total_price
		</div>
	</div>
	<input type='hidden' id='amount' value='$total_price'>
	<br>
	<button class='btn btn-primary form-control' onclick='payWithPaystack()'>Pay</button>
	";

	echo $html;
}

?>
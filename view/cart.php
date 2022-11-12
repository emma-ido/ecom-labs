<?php
include_once("../settings/core.php");
include_once("../actions/cart_functions.php");
include_once("../actions/product_functions.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cart</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
	<script type="text/javascript" src="../js/validate_form.js"></script>
<?php include_once("../settings/navbar.php"); ?>
<br>

<div class='container'>
	<div class='row'>
	  <div class='col'>
	  	<div class='card' style='padding: 10px;'>
	  		<span class='font-weight-bold'>CART</span>
	  	<?php
	  		$customer_id = getUserId();
	  		$customer_ip = getIpAddress();
	  		$cart_products = array();
	  		if($customer_id === -1) {
	  			$cart_products = get_products_from_cart_with_ip($customer_ip);
	  		} else {
	  			$cart_products = get_cart_products($customer_id);
	  		}

			$total_price = 0;
			$total_quantity = 0;
			$i = 0;
			foreach ($cart_products as $cart_product) {
				$product_id = $cart_product["p_id"];
				$quantity = $cart_product["qty"];
				$total_quantity += $quantity;
				$product = getSingleProduct($product_id);
				$product_image = $product["product_image"];
				$product_title = $product["product_title"];
				$product_price = $product["product_price"];
				$total_price += $quantity * $product_price;
				// $product_brand = getBrand($product["product_brand"]);
				// $product_cat = getCategory($product["product_cat"]);
				// $product_desc = $product["product_desc"];
				// $product_keywords = $product["product_keywords"];
				
				$remove_button = "";
				
				echo "
			  		<hr>
			  		<div class='row'>
			  			<div class='col'>
			  				<img style='max-width: 200px; max-height:200px;' src='$product_image'>
			  			</div>
			  			<div class='col-5'>$product_title<br>
			  				<span>Price: <span class='font-weight-bold'>GHC $product_price</span></span><br>
			  				<span>Qty: $quantity</span><br>
			  				
			  				<form id='new_qty_form$i' action='../actions/manage_quantity_cart.php' method='POST' class='form-inline' style='display: none;'>
			  				<div class='form-group'>
			  				<input type='hidden' name='product_id' value='$product_id'>
			  				<input type='hidden' name='customer_id' value='$customer_id'>
			  				<input type='hidden' name='manage_quantity_cart' value='YES'>
			  				<input id='newQty' name='new_qty' class='form-control mb-2 mr-sm-2' type='number' min=1 max=100 step=1 value=$quantity>
			  				</div>
			  				</form>

			  				<a class='btn btn-primary' href='#' onclick=toggleForm($i) role='button'>Manage Qty</a>
<a class='btn btn-danger' href='#' onclick='removeFromCart($product_id, $customer_id);' role='button'>Remove</a>
			  			</div>
			  		</div>";
			  		$i++;
			}
			
		?>
		</div>
	  </div>
	  <div class='col-5'>

	  	<div class='card' style='padding: 10px;'>
		  	<span class='font-weight-bold'>CART SUMMARY</span><hr>
		  	<?php echo "<span>Total items ($total_quantity)</span>"; ?>
		  	<hr>
		  	<?php echo "<span>Subtotal: <span class='font-weight-bold'>GHC $total_price</span></span>"; ?>
		  	<br>
		  	<a class="btn btn-primary" role="button" href="all_product.php">Continue Shopping</a>
		</div>
	  
	  </div>
	</div>
</div>

<br>
</body>
</html>
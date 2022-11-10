<?php
include_once('../settings/core.php');
include_once('../actions/product_functions.php');

if(isset($_GET['id']) && is_numeric($_GET['id'])) {
	$product_id = $_GET['id'];
	$product = getSingleProduct($product_id);
	if(empty($product)) {
		header("Location: all_product.php");	
	}
	$product_image = $product["product_image"];
	$product_title = $product["product_title"];
	$product_price = $product["product_price"];
	$product_id = $product["product_id"];
	$product_brand = getBrand($product["product_brand"]);
	$product_cat = getCategory($product["product_cat"]);
	$product_desc = $product["product_desc"];
	$product_keywords = $product["product_keywords"];
	$customer_id = getUserId();
} else {
	header("Location: all_product.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Products</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
	<script type="text/javascript" src="../js/validate_form.js"></script>
<?php include_once('../settings/navbar.php'); ?>
<br>

<div class="mx-auto" style="width: 95%;">
	<div class="row">
		<div class="col">
			<div class='card'>
				<?php
				echo "<img class='card-img-top' style='min-width:150px; min-height:160px;' src='$product_image' alt='Card image cap'>
				";
				?>
			</div>
		</div>
		<div class="col">
			<div class="card">
			  <div class="card-body">
			  	<div>
			  		<?php 
			  		echo "<h2 style='text-align: center;'> $product_title</h2>
			  		<h4 style='text-align: center;'>GHC $product_price</h4>
			  		<p><span class='font-weight-bold'>Brand:</span> $product_brand</p>
			  		<p><span class='font-weight-bold'>Category:</span> $product_cat</p>
			  		<p><span class='font-weight-bold'>Description</span><br> $product_desc</p>
			  		<p><span class='font-weight-bold'>Keywords</span>: $product_keywords</p>
			  		<a class='btn btn-primary btn-lg btn-block' onclick='addToCart($product_id, $customer_id)' href='#' role='button'>Add to cart</a>";
			  		?>
			  	</div>
			  </div>
			</div>
		</div>
	</div>
</div>


</body>
</html>
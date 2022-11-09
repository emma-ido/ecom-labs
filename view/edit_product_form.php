<?php 
include_once("../settings/core.php");
include_once("../actions/product_functions.php"); 

if(isset($_GET["id"])) {
	$product_id = $_GET["id"];
	$product = getSingleProduct($product_id);
	if($product == null) {
		header("location: ../index.php");
	}

	$product_title = $product["product_title"];
	$product_price = $product["product_price"];
	$product_desc = $product["product_desc"];
	$product_keywords = $product["product_keywords"];
	$product_image = $product["product_image"];

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Product</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

	<?php include_once("../settings/navbar.php"); ?>
	<br>
	<div class="mx-auto" style="width: 65%;">
	  <h2 class="font-weight-normal">Edit a product</h2>

	  <form id="theForm" action="../actions/update_product.php" method="POST" enctype="multipart/form-data">
	    
	    <?php echo "<input type='hidden' name='product_id' value=$product_id>'";?>

	    <div class="form-group">
	      <label for="product_cat">Category</label>
	      <select class="custom-select" name="product_cat" id="product_cat">
	      	<option selected>Choose Category...</option>
	      	<?php getCategoryOptions(); ?>
	      </select>
	    </div>

	    <div class="form-group">
	      <label for="product_brand">Brand</label>
	      <select class="custom-select" name="product_brand" id="product_brand">
	      	<option selected>Choose Brand...</option>
	      	<?php getBrandOptions(); ?>
	      </select>
	    </div>
	    
	    <div class="form-group">
	      <label for="product_title">Title</label>
	      
	      <?php echo "<input type='text' value='$product_title' name='product_title' size='200' class='form-control' id='product_title' placeholder='Product title' required>"; ?>
	    </div>

		<div class="form-group">
	      <label for="product_price">Price</label>
	      <?php echo "<input type='number' value='$product_price' name='product_price' class='form-control' step='0.1' id='product_price' placeholder='Product price' required>" ?>
	    </div>

	    <div class="form-group">
	      <label for="product_desc">Description</label>
	      <?php echo "<textarea name='product_desc' class='form-control' size='500' id='product_desc' placeholder='Enter a description of the product'>$product_desc</textarea>"; ?>
	    </div>

	    <div class="form-group">
	      <label for="product_image">Image</label>
	      <?php echo "<input type='file' name='product_image' class='form-control' id='product_image'>"; ?>
	    </div>
	    <?php echo "<input type='hidden' name='original_product_image' value='$product_image' class='form-control'>"; ?>
	    <div class="form-group">
	      <label for="product_keywords">Keywords</label>
	      <?php echo "<input type='text' value='$product_keywords' size='100' name='product_keywords' class='form-control' id='product_keywords'>"; ?>
	    </div>

	    <input type="submit" name="edit_product" value="Submit" class="btn btn-primary"></button>
	  </form>
	</div>
</body>
</html>
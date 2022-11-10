<?php 
include_once("../settings/core.php");
include_once("../actions/product_functions.php"); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Product</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

	<?php include_once("../settings/navbar.php"); ?>
	<br>

	<div class="mx-auto" style="width: 65%;">
		<a class="btn btn-primary" role="button" href="../view/all_product.php">View All Products</a>
	  <span style="color: red;">Scroll down to edit images</span>
	  <h2 class="font-weight-normal">Add new product</h2>

	  <form id="theForm" action="../actions/add_product.php" method="POST" enctype="multipart/form-data">
	    
	    <div class="form-group">
	      <label for="product_cat">Category</label>
	      <select class="custom-select" name="product_cat" id="product_cat" required>
	      	<?php getCategoryOptions(); ?>
	      </select>
	    </div>

	    <div class="form-group">
	      <label for="product_brand">Brand</label>
	      <select class="custom-select" name="product_brand" id="product_brand" required>
	      	<?php getBrandOptions(); ?>
	      </select>
	    </div>
	    
	    <div class="form-group">
	      <label for="product_title">Title</label>
	      <input type="text" name="product_title" size="200" class="form-control" id="product_title" placeholder="Product title" required>
	    </div>

		<div class="form-group">
	      <label for="product_price">Price</label>
	      <input type="number" name="product_price" class="form-control" step="0.1" id="product_price" placeholder="Product price" required>
	    </div>

	    <div class="form-group">
	      <label for="product_desc">Description</label>
	      <textarea name="product_desc" class="form-control" size="500" id="product_desc" placeholder="Enter a description of the product"></textarea>
	    </div>

	    <div class="form-group">
	      <label for="product_image">Image</label>
	      <input type="file" name="product_image" class="form-control" accept="image/*" id="product_image">
	    </div>

	    <div class="form-group">
	      <label for="product_keywords">Keywords</label>
	      <input type="text" size="100" name="product_keywords" class="form-control" id="product_keywords">
	    </div>

	    <input type="submit" name="add_product" value="Submit" class="btn btn-primary"></button>
	  </form>
	</div>

	<br>
	<div class="mx-auto" style="width: 65%;">
    <h2 class="font-weight-normal">Products</h2>
    <table class="table table-hover table-striped">
      <thead>
        <tr>
          <th scope="col">Title</th>
          <th>Price</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php getProductsTabular(); ?>
      </tbody>
    </table>
</div>
</body>
</html>
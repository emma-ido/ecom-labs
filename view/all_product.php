<?php
include_once('../settings/core.php');
include_once('../actions/product_functions.php');
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
    <a href="product_search_result.php" class="btn btn-primary" role="button">Search for product</a>
    <h2>All Products</h2>
    <hr>
    <?php getProducts(); ?>
  </div>


</body>
</html>
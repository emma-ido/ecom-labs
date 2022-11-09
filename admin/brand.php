<?php 
include_once("../settings/core.php");


if(isLoggedIn()) {
	if(getRole() !== '1') {
		header("Location: ../index.php?error=You do not have permission to view that page");
	}
} else {
	header("Location: ../index.php?error=Login first");
}

include_once("../actions/product_functions.php");
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Brand</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<script type="text/javascript" src="../js/validate_form.js"></script>
<?php include_once("../settings/navbar.php"); ?>

<br>

<?php

if(isset($_GET["edit"])) {
  $brandId = $_GET["edit"];
  $brandName = getBrand($brandId);
  $action_page = "<form id='brandForm' action=../actions/update_brand.php method='POST'>";
  $header = "<h2>Edit brand name</h2>";
  $brandIdInput = "<input type='hidden' name='brand_id' value=$brandId>";
  $brandNameInput = "<input type='text' name='brand' class='form-control' id='brandName' value='$brandName' required>";
  $submitName = "<input type='hidden' name='edit_brand' value='edit_brand'>";
} else {
  $action_page = "<form id='brandForm' action=../actions/add_brand.php method='POST'>";
  $header = "<h2>Add new product brand</h2>";
  $brandIdInput = "<input type='hidden' name='brand_id'>";
  $brandNameInput = "<input type='text' name='brand' class='form-control' id='brandName' placeholder='Enter a new brand name' required>";
  $submitName = "<input type='hidden' name='new_brand' value='new_brand'>";
}

?>

<div class="mx-auto" style="width: 65%;">
  <?php echo $header; ?>

  <?php echo $action_page; ?>
    <?php 
      if(isset($_GET["error"])) {
        echo "<span class='badge badge-pill badge-danger'>$_GET[error]</span>"; 
      } else if(isset($_GET["success"])) {
        echo "<span class='badge badge-pill badge-success'>$_GET[success]</span>"; 
      }
    ?>
    
    <span id="brandNameError" class="font-weight-bold" style="color: red; display: none;"></span>

    <div class="form-group">
      <label for="brand">Brand Name</label>
      <?php echo $brandNameInput; ?>
    </div>
    <?php echo $brandIdInput; ?>
    <?php echo $submitName; ?>
    
    <input type="button" value="Submit" onclick="validateBrandName()" class="btn btn-primary">
  </form>
</div>

<br>
<br>

<div class="mx-auto" style="width: 65%;">
    <h2 class="font-weight-normal">Contacts</h2>
    <table class="table table-hover table-striped">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php getBrands(); ?>
      </tbody>
    </table>
</div>

</body>
</html>
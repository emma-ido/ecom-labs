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
    <title>Category</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<script type="text/javascript" src="../js/validate_form.js"></script>
<?php include_once("../settings/navbar.php"); ?>

<br>

<?php

if(isset($_GET["edit"])) {
  $catId = $_GET["edit"];
  $catName = getCategory($catId);
  $action_page = "<form id='catForm' action=../actions/update_category.php method='POST'>";
  $header = "<h2>Edit category name</h2>";
  $catIdInput = "<input type='hidden' name='cat_id' value=$catId>";
  $catNameInput = "<input type='text' name='cat' class='form-control' id='catName' value='$catName' required>";
  $submitName = "<input type='hidden' name='edit_cat' value='edit_cat'>";
} else {
  $action_page = "<form id='catForm' action=../actions/add_category.php method='POST'>";
  $header = "<h2>Add new product category</h2>";
  $catIdInput = "<input type='hidden' name='cat_id'>";
  $catNameInput = "<input type='text' name='cat' class='form-control' id='catName' placeholder='Enter a new category name' required>";
  $submitName = "<input type='hidden' name='new_cat' value='new_cat'>";
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
    
    <span id="catNameError" class="font-weight-bold" style="color: red; display: none;"></span>

    <div class="form-group">
      <label for="brand">Category Name</label>
      <?php echo $catNameInput; ?>
    </div>
    <?php echo $catIdInput; ?>
    <?php echo $submitName; ?>
    
    <input type="button" value="Submit" onclick="validateCategoryName()" class="btn btn-primary">
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
        <?php getCategories(); ?>
      </tbody>
    </table>
</div>

</body>
</html>
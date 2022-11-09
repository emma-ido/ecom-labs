<?php 
include_once("../settings/core.php");
include_once("../controllers/product_controller.php");

if(isset($_POST["edit_cat"])) {
	$catId = $_POST["cat_id"];
	$catName = $_POST["cat"];

	if(editProductCategory($catId, $catName)) {
		header("Location: ../admin/category.php?success=Successfully updated category name");
	} else {
		header("Location: ../admin/category.php?error=Unable to update category name");
	}
}



?>
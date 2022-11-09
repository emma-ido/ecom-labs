<?php
include_once("../settings/core.php");
include_once("../controllers/product_controller.php");


if(isset($_POST["new_cat"])) {
	$catName = $_POST["cat"];
	if(addProductCategory($catName)) {
		header("Location: ../admin/category.php?success=New category added successfully");
	} else {
		header("Location: ../admin/category.php?error=Unable to add new category");
	}
}

?>
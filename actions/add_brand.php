<?php 
include_once("../settings/core.php");
include_once("../controllers/product_controller.php");


if(isset($_POST["new_brand"])) {
	$brandName = $_POST["brand"];
	if(addProductBrand($brandName)) {
		header("Location: ../admin/brand.php?success=New brand added successfully");
	} else {
		header("Location: ../admin/brand.php?error=Unable to add new brand");
	}
}


?>
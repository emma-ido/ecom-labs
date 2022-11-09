<?php 
include_once("../settings/core.php");
include_once("../controllers/product_controller.php");

if(isset($_POST["edit_brand"])) {
	$brandId = $_POST["brand_id"];
	$brandName = $_POST["brand"];

	if(editProductBrand($brandId, $brandName)) {
		header("Location: ../admin/brand.php?success=Successfully updated brand name");
	} else {
		header("Location: ../admin/brand.php?error=Unable to update brand name");
	}
}

?>
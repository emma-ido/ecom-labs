<?php 
include_once("../settings/core.php");
include_once("../controllers/product_controller.php");


if(isset($_POST["edit_product"])) {
	$product_id = $_POST["product_id"];
	$product_cat = $_POST["product_cat"];
	$product_brand = $_POST["product_brand"];
	$product_title = $_POST["product_title"];
	$product_price = $_POST["product_price"];
	$product_desc = $_POST["product_desc"];
	$product_keywords = $_POST['product_keywords'];
	$product_image = "";


	if(isset($_FILES["product_image"]) && strlen($_FILES["product_image"]['name']) > 0) {
		if(validateImage()) {
			$product_image = "../images/" .$_FILES['product_image']['name'];
		} else {
			header("../view/edit_product_form.php?error=Problem uploading image");
		}
	} else {
		$product_image = $_POST["original_product_image"];
	}

	if(editProduct($product_id, $product_cat, $product_brand, $product_title, $product_price, $product_desc, $product_image, $product_keywords)) {
		header("Location: ../index.php");
	} else {
		header("../view/edit_product_form.php?error=Error adding new product");
	}

} else {
	header("Location: ../index.php");
}



?>
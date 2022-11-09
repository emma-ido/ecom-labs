<?php
//start session
session_start(); 

//for header redirection
ob_start();

//funtion to check for login
function isLoggedIn() {
	return isset($_SESSION['active']) && $_SESSION['active'] === true;
}

//function to get user ID
function getUserId() {
	if(!isLoggedIn()) {
		return -1;
	}
	return $_SESSION['customer_id'];
}


//function to check for role (admin, customer, etc)
function getRole() {
	if(!isLoggedIn()) {
		return -1;
	}
	return $_SESSION['user_role'];
}


//checks if user is admin
function isAdmin() {
	return getRole() === '1';
}

function validateImage() {
	$target_dir = "../images/";
	$target_file = $target_dir . basename($_FILES["product_image"]["name"]);
	$uploadOk = true;
	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


	// Check if image file is a actual image or fake image
	$check = getimagesize($_FILES["product_image"]["tmp_name"]);
	if($check !== false) {
		// echo "File is an image - " . $check["mime"] . ".";
	    $uploadOk = true;
	} else {
	    // echo "File is not an image.";
	    $uploadOk = false;
	}

	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && 
		$imageFileType != "jpeg" && $imageFileType != "gif" ) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = true;
	}

	if($uploadOk) {
		if(file_exists($target_file)) {
			return true;
		} else {
			return move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file);
		}
		
	} else {
		return false;
	}

	// return $uploadOk;
}

?>
<?php 
include_once("../controllers/customer_controller.php");




if(isset($_POST["new_customer"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$pass = $_POST["pass"];
	$pass = password_hash($pass, PASSWORD_DEFAULT);
	$country = $_POST["country"];
	$city = $_POST["city"];
	$contact = $_POST["contact"];
	$role = $_POST["user_role"];
	
	if($role !== '1' && $role !== '2') {
		$role = 2;
	}
	
	echo addCustomer($name, $email, $pass, $country, $city, $contact, $role);
}



?>
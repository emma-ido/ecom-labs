<?php
include_once("../controllers/customer_controller.php");
include_once("../settings/core.php");

if(isset($_POST["user_login"])) {

	$email = $_POST["email"];
	$password = $_POST["pass"];

	$login = customerLogin($email, $password);
	if($login[0]) {
		
		$_SESSION['customer_id'] = $login[1];
		$_SESSION['user_role'] = $login[2];
		header("location: ../index.php?success=Login Successful");

	} else {
		header("location: ../login/login.php?error=Incorrect email or password");		
	}
}

?>
<?php 
include_once("../settings/core.php");
include_once("../classes/customer_class.php");

function addCustomer($name, $email, $pass, $country, $city, $contact, $role) {
	$customer = new customer();


	if(!$customer->emailExists($email)) {
		
		if($customer->addCustomer($name, $email, $pass, $country, $city, $contact, $role)) {
			// echo "Successfuly registered! <a href='../index.php'>Go home<a/>";	
			header("Location: ../login/login.php?success=Successfully Registered! Login");
		} else {
			echo "Registeration Failed <a href='../login/register.php'>Try again<a/>";
		}
	} else {
		echo "You already have an account <a href='../login/login.php'>Login<a/>";
	}
}


function getEmailFromId($customer_id) {
	$customer = new customer();
	return $customer->getEmailFromId($customer_id);
}

function customerLogin($email, $password) {
	$customer = new customer();
	return $customer->login($email, $password);
}


?>
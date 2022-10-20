<?php 
include_once("../classes/customer_class.php");

function addCustomer($name, $email, $pass, $country, $city, $contact) {
	$customer = new customer();


	if(!$customer->emailExists($email)) {
		echo "Successfuly registered! <a href='../index.php'>Go home<a/>";
		$customer->addCustomer($name, $email, $pass, $country, $city, $contact);
	} else {
		echo "You already have an account <a href='../index.php'>Go home<a/>";
	}
}


function customerLogin($email, $password) {
	$customer = new customer();

	return $customer->login($email, $password);
}


?>
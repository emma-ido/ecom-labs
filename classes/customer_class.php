<?php 
include_once("../settings/db_class.php");


class customer extends db_connection {

	function addCustomer($name, $email, $pass, $country, $city, $contact) {
		$sql = "INSERT INTO customer(customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact, user_role) VALUES ('$name', '$email', '$pass', '$country', '$city', '$contact', 2)";
		return $this->db_query($sql);
	}

	function editCustomer($id) {

	}

	function emailExists($email) {
		$sql = "SELECT customer_id FROM customer WHERE customer_email = '$email'";
		$this->db_query($sql);

		if($this->db_count() == 0) {
			return true;
		} else {
			return false;
		}
	}

	function deleteCustomer() {

	}

	

}

?>
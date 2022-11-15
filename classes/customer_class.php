<?php 
include_once("../settings/db_class.php");


class customer extends db_connection {

	function addCustomer($name, $email, $pass, $country, $city, $contact, $role=2) {
		$sql = "INSERT INTO customer(customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact, user_role) VALUES ('$name', '$email', '$pass', '$country', '$city', '$contact', $role)";
		return $this->db_query($sql);
	}

	function editCustomer($id) {

	}

	function emailExists($email) {
		$sql = "SELECT customer_id FROM customer WHERE customer_email = '$email'";
		$this->db_query($sql);

		if($this->db_count() == 0) {
			return false;
		} else {
			return true;
		}
	}

	function login($email, $password) {
		if(!$this->emailExists($email)) {
			return false;
		} else {
			$customerFromDb = $this->getCustomerByEmail($email);
			
			return array(password_verify($password, $customerFromDb["customer_pass"]), $customerFromDb["customer_id"], $customerFromDb["user_role"]);
		}
	}

	function getCustomerByEmail($email) {
		$sql = "SELECT * FROM customer WHERE customer_email = '$email'";
		return $this->db_fetch_one($sql);
	}

	function getEmailFromId($customer_id) {
		$sql = "SELECT customer_email FROM customer WHERE customer_id=$customer_id";
		return $this->db_fetch_one($sql)["customer_email"];
	}

	function deleteCustomer() {

	}

	

}

?>
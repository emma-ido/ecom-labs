<?php 
include_once("../settings/db_class.php");




class cart extends db_connection {




	function add_to_cart($product_id, $client_ip, $customer_id, $quantity=1) {
		$sql = "INSERT INTO cart(p_id, ip_add, c_id, qty) VALUES ($product_id, '$client_ip', $customer_id, $quantity)";
		if($this->is_product_in_cart($product_id, $customer_id)) {
			return array(false, "Product is already in cart. Update quantity in cart");
		}
		$status = $this->db_query($sql);
		if($status) {
			return array($status, "Successfully added product to cart");
		} else {
			return array($status, "Unable to add product to cart");
		}
		
	}


	function is_product_in_cart($product_id, $customer_id) {
		$sql = "SELECT qty FROM cart WHERE p_id=$product_id AND c_id=$customer_id";
		$this->db_query($sql);
		if($this->db_count() < 1) {
			return false;
		} else {
			return true;
		}
	}

	function get_cart_count($customer_id) {
		$sql = "SELECT COUNT(*) FROM cart WHERE c_id=$customer_id";
		return $this->db_fetch_one($sql)['COUNT(*)'];
	}

	function get_cart_count_ip($customer_ip) {
		$sql = "SELECT COUNT(*) FROM cart WHERE ip_add='$customer_ip'";
		return $this->db_fetch_one($sql)['COUNT(*)'];
	}


	function remove_from_cart($product_id, $customer_id) {
		$sql = "DELETE FROM cart WHERE p_id=$product_id AND c_id=$customer_id";
		return $this->db_query($sql);
	}


	function get_products_from_cart($customer_id) {
		$sql = "SELECT p_id, qty FROM cart WHERE c_id=$customer_id";
		return $this->db_fetch_all($sql);
	}

	function get_products_from_cart_ip($customer_ip) {
		$sql = "SELECT p_id, qty FROM cart WHERE ip_add='$customer_ip'";
		return $this->db_fetch_all($sql);
	}
}


?>
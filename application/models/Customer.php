<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Model {

	public function getCustomerInfo()
	{
		$this->db->select('*');
		$result = $this->db->get('rt_customer_table')->result_array();
		return $result;
	}

}

/* End of file Customer.php */
/* Location: ./application/models/Customer.php */
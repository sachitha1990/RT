<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Model {

	public function getSales()
	{
		$this->db->select('*');
		$result = $this->db->get('rt_customer_orders_table')->result_array();
		return $result;
	}
	

}

/* End of file Sales.php */
/* Location: ./application/models/Sales.php */
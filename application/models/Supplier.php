<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Model {

	public function getSupplierInfo()
	{
		$this->db->select('*');
		$result = $this->db->get('rt_vendors_table')->result_array();
		return $result;
	}

}

/* End of file Supplier.php */
/* Location: ./application/models/Supplier.php */
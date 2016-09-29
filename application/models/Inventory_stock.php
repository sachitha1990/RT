<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory_stock extends CI_Model {

	// get stock information from db
	public function getStockInfo($value='')
	{
		$this->db->select('*');
		$result = $this->db->get('rt_stock_items_table') -> result_array();
		return $result;
	}

	public function stockReleaseInfo()
	{
		$this->db->select('*');
		$result = $this->db->get('rt_stock_release_table') -> result_array();
		return $result;
	}

}

/* End of file Inventory_stock.php */
/* Location: ./application/models/Inventory_stock.php */
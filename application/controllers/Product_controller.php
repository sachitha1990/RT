<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->load->model('Inventory_stock');
		$data = $this->Inventory_stock->getStockInfo();
		$values = array(
			'inventories' => $data,
			);
		$this->load->view('inventory', $values);
	}

}

/* End of file Product_controller.php */
/* Location: ./application/controllers/Product_controller.php */
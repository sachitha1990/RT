<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->load->model('supplier');
		$data = $this->supplier->getSupplierInfo();
		$values = array(
			'suppliers' => $data,
			);
		$this->load->view('supplier', $values);
	}

}

/* End of file Supplier_controller.php */
/* Location: ./application/controllers/Supplier_controller.php */
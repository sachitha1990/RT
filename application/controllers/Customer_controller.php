<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_controller extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->load->model('customer');
		$data = $this->customer->getCustomerInfo();
		$values = array(
			'customers' => $data,
			);
		$this->load->view('customer', $values);
	}

}

/* End of file Customer_controller.php */
/* Location: ./application/controllers/Customer_controller.php */
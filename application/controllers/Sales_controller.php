<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		
	}

	public function sales_orders()
	{
		$this->load->model('sales');
		$data = $this->sales->getSales();
		$values = array(
			'sales' => $data,
			);
		var_dump($values);
		$this->load->view('sales', $data);
	}


}

/* End of file Sales_controller.php */
/* Location: ./application/controllers/Sales_controller.php */
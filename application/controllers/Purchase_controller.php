<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase_controller extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->load->view('purchase_info');
	}

}

/* End of file Purchase_controller.php */
/* Location: ./application/controllers/Purchase_controller.php */
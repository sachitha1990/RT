<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	
	public function index()
	{
		$this->load->view('dashboard');
	}

}

/* End of file Dashboard_controller.php */
/* Location: ./application/controllers/Dashboard_controller.php */
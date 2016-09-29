<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_Controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->load->model('Employee');
		$data = $this->Employee->getEmployee();
		$values = array(
			'employees' => $data,
			);
		$this->load->view('employees', $values);
	}

}

/* End of file Emp_Create_Controller.php */
/* Location: ./application/controllers/Emp_Create_Controller.php */
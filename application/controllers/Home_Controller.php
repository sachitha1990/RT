<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		// If the user is validated, then this function will run
		$this->load->model('Employee');
		$user_name = $this->Employee->getUserinfo($this->session->userdata('user_emp_id'));
		

		$this->load->view('view_template',array(
			'content'=>'home',
			'menu_items'=>$this->getMenu(),
			'user_name'=> $user_name));
	}

}

/* End of file Home_Controller.php */
/* Location: ./application/controllers/Home_Controller.php */
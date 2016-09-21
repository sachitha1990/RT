<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->check_isvalidated();

		// Get display menu items
		$this->load->model('menu_model');
		
	}

	protected function getMenu()
	{
		// Get logged user permission type_id
		$type_id = $this->session->has_userdata('type_id');
		return $this->menu_model->GetMenu($type_id);
	}

	private function check_isvalidated(){
		// if user not validated redirecting to login form
		if(!$this->session->has_userdata('validated')){
			redirect('login');
		}
	}

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
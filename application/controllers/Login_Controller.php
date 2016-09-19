<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$this->load->view('login', $data);
	}

	public function process(){
		// Load the model
		$this->load->model('login_model');
		// Authenticate the user
		$result =  $this->login_model->validate();
		if (!$result){
			// If user is not athenticate reload the login view
			$msg = '<font color=red>Invalid username and/or password.</font>';
			$this->index($msg);
		}else{
			$this->setSession($result);
			// if user is authenitcated 
			// redirecting to home view
			redirect('home_controller');

		}
	}

	private function setSession($data)
	{
		$session = array(
			'user_id' => $data -> user_id,
			'user_name' => $data -> user_name,
			'type_id' => $data -> user_type_id,
			'user_emp_id' => $data -> user_emp_id,
			'validated' => true

			);
		$this->session->set_userdata($session);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

}

/* End of file Login_Controller.php */
/* Location: ./application/controllers/Login_Controller.php */
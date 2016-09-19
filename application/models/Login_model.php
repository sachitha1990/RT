<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	function __construct() { 
		parent::__construct(); 
	} 
	
	public function validate(){
		// Grap user input
		$username = $this->security->xss_clean($this->input->post('username'));
		$password = $this->security->xss_clean($this->input->post('password'));

		// Prep the query
		$this->db->where('user_name', $username);
		$this->db->where('user_password', md5($password));

		// Run the query
		$query = $this->db->get('rt_user_table');

		// Check there is any result
		if($query->num_rows() == 1){
			// If there is a authenticated user, then create session data
			$raw = $query->row();
			return $raw;
		}else{

			return false;
			
		}

	}



}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */
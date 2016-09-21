<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Model {

	public function getUserinfo($emp_id)
	{

		$employee_num = (int)$emp_id;
		
		// Prepare the query
		$this->db->select('employee_name');

		$this->db->where('employee_id', $employee_num);

		// Run the query
		$result = $this->db->get('rt_employee_table')->result_array();
		$user_name = $result[0];

		return $user_name;
	}
}

/* End of file Home_model.php */
/* Location: ./application/models/Home_model.php */
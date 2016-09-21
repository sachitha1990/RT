<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model {

	public function GetMenu($type_id)
	{

		$this->db->select('rt_employee_permission_table.id,rt_menu_table.menu_name, rt_menu_table.menu_parent_id, rt_menu_table.menu_url');

		$this->db->from('rt_employee_permission_table');

		$this->db->join('rt_menu_table', 'rt_menu_table.menu_id = rt_employee_permission_table.menu_id ', 'left');

		// Prepare query
		$this->db->where('employee_type_id', $type_id);

		// Run the query
		$menu = $this->db->get()->result_array();

		$return_array = array();
		foreach ($menu as $key => $value) {
			if ($value['menu_parent_id'] == null) {
				$return_array[$value['id']] = $value;
			}else{
				$return_array[$value['menu_parent_id']]['childs'][$value['id']] = $value;
			}
		}
		return $return_array;
	}
}

/* End of file Menu_model.php */
/* Location: ./application/models/Menu_model.php */
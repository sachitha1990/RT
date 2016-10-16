<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('inventory_stock', 'item');
	}

	public function index()
	{
		// $this->load->model('Inventory_stock');
		// $data = $this->Inventory_stock->getStockInfo();
		// $values = array(
		// 	'inventories' => $data,
		// 	);
		$this->load->view('inventory');
	}

	public function item_list()
	{
		// TODO check get_datatables function
		$list = $this->item-> get_datatables();
		$data = array();
		$no = $_POST['start'];

		foreach ($list as $item) {
			$no++;
			$row = array();
			$row[] = $item->stock_item_code;
			$row[] = $item->stock_item_name;
			$row[] = $item->stock_item_discription;
			$row[] = $item->local_serial;

			// add html for action
			$row[] = '<a class="btn btn-sm btn-default" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$item->stock_item_id."'".')"><span class="glyphicon glyphicon-pencil"></span></a>
			<a class="btn btn-sm btn-default" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$item->stock_item_id."'".')"><span class="glyphicon glyphicon-trash"></span></a>';

			$data[] = $row;

		}

		$output = array(

			"draw" => $_POST['draw'],
			"recordsTotal" => $this->item->count_all(),
			"recordsFiltered" => $this->item->count_filtered(),
			"data" => $data,

			);

		// output to jason format
		echo json_encode($output);

	}



}

/* End of file Product_controller.php */
/* Location: ./application/controllers/Product_controller.php */
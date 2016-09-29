<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Release_controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->load->model('inventory_stock');
		$data = $this->inventory_stock->stockReleaseInfo();
		$values = array(
			'stock_releases' => $data,
			);
		$this->load->view('stock_release', $values);
	}



}

/* End of file Release_controller.php */
/* Location: ./application/controllers/Release_controller.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		
		$this->load->model('Supplier_model');
		$this->load->helper('html');
		$this->load->library('image_lib');
	}

	public function index()
	{
				$sup['supplier'] = $this->Supplier_model->getDataSupplier();
				$this->load->view('component/header');
				$this->load->view('supplier',$sup);
				$this->load->view('component/footer');
	}

}

/* End of file Supplier.php */
/* Location: ./application/controllers/Supplier.php */
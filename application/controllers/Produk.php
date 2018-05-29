<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		
		$this->load->model('Produk_model');
		$this->load->helper('html');
		$this->load->library('image_lib');
	}

	public function index()
	{
				$pro['produk'] = $this->Produk_model->tampil_produk()->result();
				$this->load->view('component/header');
				$this->load->view('produk',$pro);
				$this->load->view('component/footer');
	}

	public function form_produk()
	{
		$this->load->view('component/header');
		$this->load->view('form_produk');
		$this->load->view('component/footer');
	}

}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		// $this->load->model('kasir_model');
		// $this->load->model('kategori_model');
		$this->load->helper('html');
		$this->load->library('image_lib');
		
	}

	public function index()
	{
		$this->load->view('component/header');
		$this->load->view('component/footer');
		$this->load->view('home');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
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
		if($this->session->userdata('logged_in')){
			$session_data= $this->session->userdata('logged_in');
			if ($session_data['role'] === 'admin') {
		    	$object['kat']=$this->kategori_model->getDataKategori();
				$this->load->view('component/header');
				$this->load->view('home',$object);
				$this->load->view('component/footer');
			
  //   		}elseif($session_data['role'] === 'kasir'){
  //   			redirect('login','refresh');
    		}
		// }else{
		// 	redirect('login','refresh');
		}	
		$this->load->view('component/header');
		$this->load->view('component/footer');
		$this->load->view('home');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
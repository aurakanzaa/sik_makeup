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
		// if($this->session->set_userdata('logged_in')){
		// 	$session_data= $this->session->set_userdata('logged_in');
		// 	// $data['username']=$session_data['username'];
		// 	if ($session_data['role'] === 'admin') {
				
  //   			$this->load->view('component/header');
		// 		$this->load->view('home',$data);
		// 		$this->load->view('component/footer');
  //   		}elseif($session_data['role'] === 'kasir'){
  //   			$this->load->view('component/header');
  //   			$this->load->view('home',$data);
  //   			$this->load->view('component/footer');
  //   		}
		// }else{
		// 	redirect('login','refresh');
		// }

		$this->load->view('component/header');
		$this->load->view('home');
		$this->load->view('component/footer');
	}


}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
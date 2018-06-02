<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Golongan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		
		$this->load->model('golongan_model');
		$this->load->helper('html');
		$this->load->library('image_lib');
	}
	public function index()
	{
		// if($this->session->userdata('logged_in')){
		// 	$session_data= $this->session->userdata('logged_in');
		// 	if ($session_data['role'] === 'admin') {
		//     	$object['kat']=$this->golongan_model->getDataGolongan();
		// 		$this->load->view('component/header');
		// 		$this->load->view('golongan',$object);
		// 		$this->load->view('component/footer');
			
  //   		}elseif($session_data['role'] === 'kasir'){
  //   			redirect('login','refresh');
  //   		}
		// }else{
		// 	redirect('login','refresh');
		// }	
		
		    	$object['gol']=$this->golongan_model->getDataGolongan();
				$this->load->view('component/header');
				$this->load->view('golongan',$object);
				$this->load->view('component/footer');
			
	}	

	public function form_golongan(){
		$this->load->view('component/header');
		$this->load->view('form_golongan');
		$this->load->view('component/footer');
	}

	public function create(){
		$object['kat']=$this->golongan_model->getDataGolongan();
		$this->form_validation->set_rules('nama_gol','nama_gol','trim|required');
		$this->load->model('golongan_model');

		if($this->form_validation->run()==FALSE){
			$this->load->view('component/header');
			$this->load->view('form_golongan');
			$this->load->view('component/footer');
		}else{
			
			$this->golongan_model->insertGolongan();
			$this->load->view('component/header');
			redirect('golongan','refresh');
			$this->load->view('component/footer');
		}
	}

	public function update($id){
		$this->form_validation->set_rules('nama_gol','nama_gol','trim|required');
		$this->form_validation->set_rules('gaji_pokok','gaji_pokok','trim|required');

		$data['gol']=$this->golongan_model->getGolongan($id);

		if($this->form_validation->run()==FALSE){
			$this->load->view('component/header');
			$this->load->view('edit_golongan',$data);
			$this->load->view('component/footer');
		}else{
			$this->golongan_model->UpdateById($id);
			redirect('golongan','refresh');
		}
	}

	public function delete($id){
		$this->golongan_model->delete($id);
		redirect('golongan','refresh');
	}

	// public function insert(){
	// 	$this->penjualan_model->insertData();
	// 	redirect('home','refresh');
	// }
}

/* End of file golongan.php */
/* Location: ./application/controllers/golongan.php */
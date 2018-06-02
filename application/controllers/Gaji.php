<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gaji extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		// $this->load->model('admin_model');
		$this->load->model('gaji_model');
		$this->load->helper('html');
		$this->load->library('image_lib');
	}
	public function index()
	{
		// if($this->session->userdata('logged_in')){
		// 	$session_data= $this->session->userdata('logged_in');
		// 	if ($session_data['role'] === 'admin') {
		//     	$object['kat']=$this->gaji_model->getDataGaji();
		// 		$this->load->view('component/header');
		// 		$this->load->view('gaji',$object);
		// 		$this->load->view('component/footer');
			
  //   		}elseif($session_data['role'] === 'kasir'){
  //   			redirect('login','refresh');
  //   		}
		// }else{
		// 	redirect('login','refresh');
		// }	
		
		    	$object['gaji']=$this->gaji_model->getDataGaji();
				$this->load->view('component/header');
				$this->load->view('gaji',$object);
				$this->load->view('component/footer');
			
	}	

	public function form_gaji(){
		$this->load->view('component/header');
		$this->load->view('form_gaji');
		$this->load->view('component/footer');
	}

	public function create(){
		$object['gaji']=$this->gaji_model->getDataGaji();
		$this->form_validation->set_rules('total_gaji','total_gaji','trim|required');
		$this->form_validation->set_rules('tanggal','tanggal','trim|required');
		$this->form_validation->set_rules('status','status','trim|required');
		$this->form_validation->set_rules('id_admin','id_admin','trim|required');
		$this->load->model('gaji_model');

		if($this->form_validation->run()==FALSE){
			$this->load->view('component/header');
			$this->load->view('form_gaji');
			$this->load->view('component/footer');
		}else{
			
			$this->gaji_model->insertGaji();
			$this->load->view('component/header');
			redirect('gaji','refresh');
			$this->load->view('component/footer');
		}
	}

	public function update($id){
		$this->form_validation->set_rules('total_gaji','total_gaji','trim|required');
		$this->form_validation->set_rules('tanggal','tanggal','trim|required');
		$this->form_validation->set_rules('status','status','trim|required');
		$this->form_validation->set_rules('id_admin','id_admin','trim|required');

		$data['gaji']=$this->gaji_model->getGaji($id);

		if($this->form_validation->run()==FALSE){
			$this->load->view('component/header');
			$this->load->view('edit_gaji',$data);
			$this->load->view('component/footer');
		}else{
			$this->gaji_model->UpdateById($id);
			redirect('gaji','refresh');
		}
	}

	public function delete($id){
		$this->gaji_model->delete($id);
		redirect('gaji','refresh');
	}

	// public function insert(){
	// 	$this->penjualan_model->insertData();
	// 	redirect('home','refresh');
	// }
}

/* End of file gaji.php */
/* Location: ./application/controllers/gaji.php */
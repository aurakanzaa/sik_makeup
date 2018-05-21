<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		
		$this->load->model('kategori_model');
		$this->load->helper('html');
		$this->load->library('image_lib');
	}
	public function index()
	{
		// if($this->session->userdata('logged_in')){
		// 	$session_data= $this->session->userdata('logged_in');
		// 	if ($session_data['role'] === 'admin') {
		//     	$object['kat']=$this->kategori_model->getDataKategori();
		// 		$this->load->view('component/header');
		// 		$this->load->view('kategori',$object);
		// 		$this->load->view('component/footer');
			
  //   		}elseif($session_data['role'] === 'kasir'){
  //   			redirect('login','refresh');
  //   		}
		// }else{
		// 	redirect('login','refresh');
		// }	
		
		    	$object['kat']=$this->kategori_model->getDataKategori();
				$this->load->view('component/header');
				$this->load->view('kategori',$object);
				$this->load->view('component/footer');
			
	}	

	public function form_kategori(){
		$this->load->view('component/header');
		$this->load->view('form_kategori');
		$this->load->view('component/footer');
	}

	public function create(){
		$object['kat']=$this->kategori_model->getDataKategori();
		$this->form_validation->set_rules('nama_kategori','nama_kategori','trim|required');
		$this->load->model('kategori_model');

		if($this->form_validation->run()==FALSE){
			$this->load->view('component/header');
			$this->load->view('form_kategori');
			$this->load->view('component/footer');
		}else{
			
			$this->kategori_model->insertKategori();
			$this->load->view('component/header');
			redirect('kategori','refresh');
			$this->load->view('component/footer');
		}
	}

	public function update($id){
		$this->form_validation->set_rules('nama_kategori','nama_kategori','trim|required');

		$data['kategori']=$this->kategori_model->getKategori($id);

		if($this->form_validation->run()==FALSE){
			$this->load->view('component/header');
			$this->load->view('edit_kategori',$data);
			$this->load->view('component/footer');
		}else{
			$this->kategori_model->UpdateById($id);
			redirect('kategori','refresh');
		}
	}

	public function delete($id){
		$this->kategori_model->delete($id);
		redirect('kategori','refresh');
	}

	// public function insert(){
	// 	$this->penjualan_model->insertData();
	// 	redirect('home','refresh');
	// }
}

/* End of file kategori.php */
/* Location: ./application/controllers/kategori.php */
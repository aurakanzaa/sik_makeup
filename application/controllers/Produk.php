<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('kategori_model');
		$this->load->model('produk_model');
		$this->load->model('kategori_model');
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
		
		    	$object['pro']=$this->produk_model->getDataProduk();
				$this->load->view('component/header');
				$this->load->view('produk',$object);
				$this->load->view('component/footer');
			
	}	

	public function form_produk(){
		$object['kategori']=$this->kategori_model->getDataKategori();
		$this->load->view('component/header');
		$this->load->view('form_produk',$object);
		$this->load->view('component/footer');
	}

	public function create(){
		$object['pro']=$this->produk_model->getDataProduk();
		$this->form_validation->set_rules('nama_produk','nama_produk','trim|required');
		$this->form_validation->set_rules('stok','stok','trim|required');
		$this->form_validation->set_rules('harga_jual','harga','trim|required');
		$this->form_validation->set_rules('harga_beli','harga','trim|required');
		$this->form_validation->set_rules('id_kategori','id_kategori','trim|required');
		$this->form_validation->set_rules('deskripsi','deskripsi','trim|required');
		$this->load->model('produk_model');
		$this->load->model('kategori_model');

		if($this->form_validation->run()==FALSE){
			$object['kategori']=$this->kategori_model->getDataKategori();
			$this->load->view('component/header');
			$this->load->view('form_produk',$object);
			$this->load->view('component/footer');
		}else{
			
			$this->produk_model->insertProduk();
			$this->load->view('component/header');
			redirect('produk','refresh');
			$this->load->view('component/footer');
		}
	}

	public function update($id){
		$this->form_validation->set_rules('nama_produk','nama_produk','trim|required');
		$this->form_validation->set_rules('stok','stok','trim|required');
		$this->form_validation->set_rules('harga','harga','trim|required');
		$this->form_validation->set_rules('id_kategori','id_kategori','trim|required');
		$this->form_validation->set_rules('deskripsi','deskripsi','trim|required');

		$data['pro']=$this->produk_model->getProduk($id);
		$data['kategori']=$this->kategori_model->getDataKategori();

		if($this->form_validation->run()==FALSE){
			$this->load->view('component/header');
			$this->load->view('edit_produk',$data);
			$this->load->view('component/footer');
		}else{
			$this->produk_model->UpdateById($id);
			redirect('produk','refresh');
		}
	}

	public function delete($id){
		$this->produk_model->delete($id);
		redirect('produk','refresh');
	}

	// public function insert(){
	// 	$this->penjualan_model->insertData();
	// 	redirect('home','refresh');
	// }
}

/* End of file gaji.php */
/* Location: ./application/controllers/gaji.php */
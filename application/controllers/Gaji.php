<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gaji extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('admin_model');
		$this->load->model('gaji_model');
		$this->load->helper('html');
		$this->load->library('image_lib');
	}
	public function index()
	{
		$object['gaji']=$this->gaji_model->getDataGaji();
		$object['admin']=$this->admin_model->getDataAdmin();

		$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'active',
        		'keuangan'=>'',
        		'produk'=>'',
        		'pembelian'=>'',
        		'pemasukan'=>'',
        		'pengeluaran'=>'',
        		'utang'=>'',
        		'cash_flow'=>'',
        		'neraca'=>'',
        		'admin'=>'',
        		'gaji'=>'active',
        		'golongan'=>'',
        		'absensi'=>'',
        		'user'=>'',
        		'barang'=>'',
        		'supplier'=>'',
        		'kategori'=>'',
        		);
		
		    	
				$this->load->view('component/header',$cek);
				$this->load->view('gaji',$object);
				$this->load->view('component/footer');
			
	}	

	public function form_gaji(){
		$object['gaji']=$this->gaji_model->getDataGaji();
		$object['admin']=$this->admin_model->getDataAdmin();

		$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'active',
        		'keuangan'=>'',
        		'produk'=>'',
        		'pembelian'=>'',
        		'pemasukan'=>'',
        		'pengeluaran'=>'',
        		'utang'=>'',
        		'cash_flow'=>'',
        		'neraca'=>'',
        		'admin'=>'',
        		'gaji'=>'active',
        		'golongan'=>'',
        		'absensi'=>'',
        		'user'=>'',
        		'barang'=>'',
        		'supplier'=>'',
        		'kategori'=>'',
        		);
		
		    	
				$this->load->view('component/header',$cek);
				$this->load->view('form_gaji',$object);
				$this->load->view('component/footer');
	}

	public function create(){
		$object['gaji']=$this->gaji_model->getDataGaji();
		$object['admin']=$this->admin_model->getDataAdmin();

		$this->form_validation->set_rules('total_gaji','total_gaji','trim|required');
		$this->form_validation->set_rules('tanggal','tanggal','trim|required');
		$this->form_validation->set_rules('status','status','trim|required');
		$this->form_validation->set_rules('id_admin','id_admin','trim|required');
		$this->load->model('gaji_model');

		if($this->form_validation->run()==FALSE){
			$object['gaji']=$this->gaji_model->getDataGaji();
			$object['admin']=$this->admin_model->getDataAdmin();

			$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'active',
        		'keuangan'=>'',
        		'produk'=>'',
        		'pembelian'=>'',
        		'pemasukan'=>'',
        		'pengeluaran'=>'',
        		'utang'=>'',
        		'cash_flow'=>'',
        		'neraca'=>'',
        		'admin'=>'',
        		'gaji'=>'active',
        		'golongan'=>'',
        		'absensi'=>'',
        		'user'=>'',
        		'barang'=>'',
        		'supplier'=>'',
        		'kategori'=>'',
        		);
			$this->load->view('component/header',$cek);
			$this->load->view('form_gaji',$object);
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
		$data['admin']=$this->admin_model->getDataAdmin();

		if($this->form_validation->run()==FALSE){
			$data['gaji']=$this->gaji_model->getGaji($id);
			$data['admin']=$this->admin_model->getDataAdmin();
			$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'active',
        		'keuangan'=>'',
        		'produk'=>'',
        		'pembelian'=>'',
        		'pemasukan'=>'',
        		'pengeluaran'=>'',
        		'utang'=>'',
        		'cash_flow'=>'',
        		'neraca'=>'',
        		'admin'=>'',
        		'gaji'=>'active',
        		'golongan'=>'',
        		'absensi'=>'',
        		'user'=>'',
        		'barang'=>'',
        		'supplier'=>'',
        		'kategori'=>'',
        		);
			$this->load->view('component/header',$cek);
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
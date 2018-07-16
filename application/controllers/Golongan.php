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
		$object['gol']=$this->golongan_model->getDataGolongan();
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
        		'pemesanan'=>'',
                'pembayaran'=>'',
        		'neraca'=>'',
        		'admin'=>'',
        		'gaji'=>'',
        		'golongan'=>'active',
        		'absensi'=>'',
        		'user'=>'',
        		'barang'=>'',
        		'supplier'=>'',
        		'kategori'=>'',
        		);
		
		    	
				$this->load->view('component/header',$cek);
				$this->load->view('golongan',$object);
				$this->load->view('component/footer');
			
	}	

	public function form_golongan(){
		$object['gol']=$this->golongan_model->getDataGolongan();
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
        		'pemesanan'=>'',
                'pembayaran'=>'',
        		'neraca'=>'',
        		'admin'=>'',
        		'gaji'=>'',
        		'golongan'=>'active',
        		'absensi'=>'',
        		'user'=>'',
        		'barang'=>'',
        		'supplier'=>'',
        		'kategori'=>'',
        		);
		$this->load->view('component/header',$cek);
		$this->load->view('form_golongan',$object);
		$this->load->view('component/footer');
	}

	public function create(){
		$object['kat']=$this->golongan_model->getDataGolongan();
		$this->form_validation->set_rules('nama_gol','nama_gol','trim|required');
		$this->form_validation->set_rules('gaji_pokok','gaji_pokok','trim|required');
		$this->load->model('golongan_model');

		if($this->form_validation->run()==FALSE){
			$object['gol']=$this->golongan_model->getDataGolongan();
			$object['kat']=$this->golongan_model->getDataGolongan();
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
	        		'pemesanan'=>'',
                	'pembayaran'=>'',
	        		'neraca'=>'',
	        		'admin'=>'',
	        		'gaji'=>'',
	        		'golongan'=>'active',
	        		'absensi'=>'',
	        		'user'=>'',
	        		'barang'=>'',
	        		'supplier'=>'',
	        		'kategori'=>'',
	        		);
			$this->load->view('component/header',$cek);
			$this->load->view('form_golongan',$object);
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
			$object['gol']=$this->golongan_model->getDataGolongan();
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
        		'pemesanan'=>'',
                'pembayaran'=>'',
        		'neraca'=>'',
        		'admin'=>'',
        		'gaji'=>'',
        		'golongan'=>'active',
        		'absensi'=>'',
        		'user'=>'',
        		'barang'=>'',
        		'supplier'=>'',
        		'kategori'=>'',
        		);
			$this->load->view('component/header',$cek);
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
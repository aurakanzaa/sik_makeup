<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('kategori_model');
		$this->load->model('supplier_model');
		$this->load->helper('html');
		$this->load->library('image_lib');
	}
	public function index()
	{		
		    	$object['sup']=$this->supplier_model->getDataSupplier();
		    	$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'',
        		'keuangan'=>'',
        		'produk'=>'active',
        		'pembelian'=>'',
        		'pemasukan'=>'',
        		'pengeluaran'=>'',
        		'utang'=>'',
                        'pemesanan'=>'',
                'pembayaran'=>'',
                        'labarugi'=>'',
        		'cash_flow'=>'',
        		'neraca'=>'',
        		'admin'=>'',
        		'gaji'=>'',
        		'golongan'=>'',
        		'absensi'=>'',
        		'user'=>'',
        		'barang'=>'',
        		'supplier'=>'active',
        		'kategori'=>'',
        		);
				$this->load->view('component/header',$cek);
				$this->load->view('supplier',$object);
				$this->load->view('component/footer');
			
	}	

	public function form_supplier(){
		$object['sup']=$this->supplier_model->getDataSupplier();
		    	$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'',
        		'keuangan'=>'',
                        'pemesanan'=>'',
                'pembayaran'=>'',
        		'produk'=>'active',
        		'pembelian'=>'',
        		'pemasukan'=>'',
        		'pengeluaran'=>'',
        		'utang'=>'',
                        'labarugi'=>'',
        		'cash_flow'=>'',
        		'neraca'=>'',
        		'admin'=>'',
        		'gaji'=>'',
        		'golongan'=>'',
        		'absensi'=>'',
        		'user'=>'',
        		'barang'=>'',
        		'supplier'=>'active',
        		'kategori'=>'',
        		);
		$this->load->view('component/header',$cek);
		$this->load->view('form_supplier',$object);
		$this->load->view('component/footer');
	}

	public function create(){
		$object['sup']=$this->supplier_model->getDataSupplier();
		$this->form_validation->set_rules('nama','nama','trim|required');
		$this->form_validation->set_rules('alamat','alamat','trim|required');
		$this->form_validation->set_rules('no_telp','no_telp','trim|required');
		$this->load->model('supplier_model');
		$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'',
        		'keuangan'=>'',
        		'produk'=>'active',
        		'pembelian'=>'',
        		'pemasukan'=>'',
        		'pengeluaran'=>'',
        		'utang'=>'',
        		'cash_flow'=>'',
        		'neraca'=>'',
                        'pemesanan'=>'',
                'pembayaran'=>'',
                        'labarugi'=>'',
        		'admin'=>'',
        		'gaji'=>'',
        		'golongan'=>'',
        		'absensi'=>'',
        		'user'=>'',
        		'barang'=>'',
        		'supplier'=>'active',
        		'kategori'=>'',
        	);

		if($this->form_validation->run()==FALSE){
			
			$object['sup']=$this->supplier_model->getDataSupplier();	
			$this->load->view('component/header',$cek);
			$this->load->view('form_supplier',$object);
			$this->load->view('component/footer');
		}else{
			
			$this->supplier_model->insertSupplier();
			$this->load->view('component/header',$cek);
			redirect('supplier','refresh');
			$this->load->view('component/footer');
		}
	}

	public function update($id){
		$this->form_validation->set_rules('nama','nama','trim|required');
		$this->form_validation->set_rules('alamat','alamat','trim|required');
		$this->form_validation->set_rules('no_telp','no_telp','trim|required');

		$data['sup']=$this->supplier_model->getSupplier($id);
		
		if($this->form_validation->run()==FALSE){
			$object['sup']=$this->supplier_model->getDataSupplier();

		    	$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'',
        		'keuangan'=>'',
        		'produk'=>'active',
        		'pembelian'=>'',
        		'pemasukan'=>'',
        		'pengeluaran'=>'',
        		'utang'=>'',
                        'pemesanan'=>'',
                'pembayaran'=>'',
                        'labarugi'=>'',
        		'cash_flow'=>'',
        		'neraca'=>'',
        		'admin'=>'',
        		'gaji'=>'',
        		'golongan'=>'',
        		'absensi'=>'',
        		'user'=>'',
        		'barang'=>'',
        		'supplier'=>'active',
        		'kategori'=>'',
        		);
			$this->load->view('component/header',$cek);
			$this->load->view('edit_supplier',$data);
			$this->load->view('component/footer');
		}else{
			$this->supplier_model->UpdateById($id);
			redirect('supplier','refresh');
		}
	}

	public function delete($id){
		$this->supplier_model->delete($id);
		redirect('supplier','refresh');
	}

	// public function insert(){
	// 	$this->penjualan_model->insertData();
	// 	redirect('home','refresh');
	// }
}

/* End of file gaji.php */
/* Location: ./application/controllers/gaji.php */
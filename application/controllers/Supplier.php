<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		
		$this->load->model('supplier_model');
		$this->load->helper('html');
		$this->load->library('image_lib');
	}

	public function index()
	{
				$sup['supplier'] = $this->supplier_model->getDataSupplier();
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
				$this->load->view('supplier',$sup);
				$this->load->view('component/footer');
	}

	public function create(){
		$this->form_validation->set_rules('nama','nama','trim|required');
		$this->form_validation->set_rules('alamat','alamat','trim|required');
		$this->form_validation->set_rules('no_telp','no_telp','trim|required');
		if($this->form_validation->run()==FALSE){
			
		$object['supplier']=$this->supplier_model->getDataSupplier();
		
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
		}else{
			
			$this->pembelian_model->insert();
			redirect('pembelian','refresh');
		}
	}

	public function update($id){
		$this->form_validation->set_rules('nama','nama','trim|required');
		$this->form_validation->set_rules('alamat','alamat','trim|required');
		$this->form_validation->set_rules('no_telp','no_telp','trim|required');
		if($this->form_validation->run()==FALSE){

			$object['supplier']=$this->supplier_model->getDataSupplier();
		
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
			$this->load->view('edit_supplier',$object);
			$this->load->view('component/footer');
		}else{
			
			$this->supplier_model->update($id);
			redirect('supplier','refresh');
		}
	}

	public function delete($id)
	{
		$this->supplier_model->delete($id);
		redirect('supplier','refresh');
	}

}

/* End of file Supplier.php */
/* Location: ./application/controllers/Supplier.php */
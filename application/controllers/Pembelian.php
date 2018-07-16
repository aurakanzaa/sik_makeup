<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('produk_model');
		$this->load->model('pembelian_model');
		$this->load->model('supplier_model');
		$this->load->helper('html');
		$this->load->library('image_lib');
	}

	public function index()
	{
		$object['pembelian']=$this->pembelian_model->getDataPembelian();
		$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'',
        		'keuangan'=>'active',
        		'produk'=>'',
        		'pembelian'=>'active',
                'pemesanan'=>'',
                'pembayaran'=>'',
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
        		'supplier'=>'',
        		'kategori'=>'',
        		);
		$this->load->view('component/header',$cek);
		$this->load->view('Pembelian/view_pembelian',$object);
		$this->load->view('component/footer');	
	}

	public function form_pembelian()
	{
		$object['produk']=$this->produk_model->getDataProduk();
		$object['supplier']=$this->supplier_model->getDataSupplier();
		$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'',
        		'keuangan'=>'active',
        		'produk'=>'',
        		'pembelian'=>'active',
        		'pemasukan'=>'',
        		'pengeluaran'=>'',
        		'utang'=>'',
        		'cash_flow'=>'',
                'pemesanan'=>'',
                'pembayaran'=>'',
        		'neraca'=>'',
        		'admin'=>'',
        		'gaji'=>'',
        		'golongan'=>'',
        		'absensi'=>'',
        		'user'=>'',
        		'barang'=>'',
        		'supplier'=>'',
        		'kategori'=>'',
        		);
		$this->load->view('component/header',$cek);
		$this->load->view('Pembelian/form_pembelian',$object);
		$this->load->view('component/footer');	
	}

	public function create(){
		$this->form_validation->set_rules('id_produk','nama produk','trim|required');
		$this->form_validation->set_rules('jumlah','Jumlah','trim|required');
		$this->form_validation->set_rules('harga_total','Harga Total','trim|required');
		$this->form_validation->set_rules('tanggal','Tanggal','trim|required');
		if($this->form_validation->run()==FALSE){
		      $object['produk']=$this->produk_model->getDataProduk();
		      $object['supplier']=$this->supplier_model->getDataSupplier();
		
		      $cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'',
        		'keuangan'=>'active',
        		'produk'=>'',
        		'pembelian'=>'active',
        		'pemasukan'=>'',
        		'pengeluaran'=>'',
        		'utang'=>'',
        		'cash_flow'=>'',
                'pemesanan'=>'',
                'pembayaran'=>'',
        		'neraca'=>'',
        		'admin'=>'',
        		'gaji'=>'',
        		'golongan'=>'',
        		'absensi'=>'',
        		'user'=>'',
        		'barang'=>'',
        		'supplier'=>'',
        		'kategori'=>'',
        		);
		      $this->load->view('component/header',$cek);
		      $this->load->view('Pembelian/form_pembelian',$object);
		      $this->load->view('component/footer');
		}else{
			
		      $this->pembelian_model->insert();
                      redirect('pembelian','refresh');
		     
		}
	}

	public function update($id){
		$this->form_validation->set_rules('id_produk','nama produk','trim|required');
		$this->form_validation->set_rules('jumlah','Jumlah','trim|required');
		$this->form_validation->set_rules('harga_total','Harga Total','trim|required');
		$this->form_validation->set_rules('tanggal','Tanggal','trim|required');
		
		if($this->form_validation->run()==FALSE){

			$object['pembelian']=$this->pembelian_model->getPembelian($id);
			$object['produk']=$this->produk_model->getDataProduk();
			$object['supplier']=$this->supplier_model->getDataSupplier();
			$cek['status'] = array(
        		      'home'=>'',
        		      'hrd'=>'',
        		      'keuangan'=>'active',
        		      'produk'=>'',
        		      'pembelian'=>'active',
        		      'pemasukan'=>'',
        		      'pengeluaran'=>'',
        		      'utang'=>'',
                      'pemesanan'=>'',
                'pembayaran'=>'',
        		      'cash_flow'=>'',
        		      'neraca'=>'',
        		      'admin'=>'',
        		      'gaji'=>'',
        		      'golongan'=>'',
        		      'absensi'=>'',
        		      'user'=>'',
        		      'barang'=>'',
        		      'supplier'=>'',
        		      'kategori'=>'',
        		      );
			$this->load->view('component/header',$cek);
			$this->load->view('Pembelian/form_update_pembelian',$object);
			$this->load->view('component/footer');
		}else{
			
			$this->pembelian_model->update($id);
			redirect('pembelian','refresh');
		}
	}

	public function delete($id)
	{
		$this->pembelian_model->delete($id);
		redirect('pembelian','refresh');
	}

}

/* End of file Pembelian.php */
/* Location: ./application/controllers/Pembelian.php */
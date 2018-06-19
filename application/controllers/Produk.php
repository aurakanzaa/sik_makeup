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
		    	$object['pro']=$this->produk_model->getDataProduk();
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
        		'barang'=>'active',
        		'supplier'=>'',
        		'kategori'=>'',
        		);
				$this->load->view('component/header',$cek);
				$this->load->view('produk',$object);
				$this->load->view('component/footer');
			
	}	

	public function form_produk(){
		$object['kategori']=$this->kategori_model->getDataKategori();
		$object['pro']=$this->produk_model->getDataProduk();
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
        		'barang'=>'active',
        		'supplier'=>'',
        		'kategori'=>'',
        		);
		$this->load->view('component/header',$cek);
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
        		'barang'=>'active',
        		'supplier'=>'',
        		'kategori'=>'',
        	);

		if($this->form_validation->run()==FALSE){
			$object['kategori']=$this->kategori_model->getDataKategori();
			$object['pro']=$this->produk_model->getDataProduk();	
			$this->load->view('component/header',$cek);
			$this->load->view('form_produk',$object);
			$this->load->view('component/footer');
		}else{
			
			$this->produk_model->insertProduk();
			$this->load->view('component/header',$cek);
			redirect('produk','refresh');
			$this->load->view('component/footer');
		}
	}

	public function update($id){
		$this->form_validation->set_rules('nama_produk','nama_produk','trim|required');
		$this->form_validation->set_rules('stok','stok','trim|required');
		$this->form_validation->set_rules('harga_jual','harga','trim|required');
		$this->form_validation->set_rules('harga_beli','harga','trim|required');
		$this->form_validation->set_rules('id_kategori','id_kategori','trim|required');
		$this->form_validation->set_rules('deskripsi','deskripsi','trim|required');

		$data['pro']=$this->produk_model->getProduk($id);
		$data['kategori']=$this->kategori_model->getDataKategori();

		if($this->form_validation->run()==FALSE){
			$data['pro']=$this->produk_model->getDataProduk();
			$data['kategori']=$this->kategori_model->getDataKategori();

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
        		'barang'=>'active',
        		'supplier'=>'',
        		'kategori'=>'',
        		);
			$this->load->view('component/header',$cek);
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

}

/* End of file gaji.php */
/* Location: ./application/controllers/gaji.php */
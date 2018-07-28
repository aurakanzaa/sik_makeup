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
		$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'',
        		'keuangan'=>'',
        		'produk'=>'active',
        		'pembelian'=>'',
        		'pemasukan'=>'',
        		'pengeluaran'=>'',
        		'utang'=>'',
                'labarugi'=>'',
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
        		'kategori'=>'active',
        		);
		
		    	$object['kat']=$this->kategori_model->getDataKategori();
				$this->load->view('component/header',$cek);
				$this->load->view('kategori',$object);
				$this->load->view('component/footer');
			
	}	

	public function form_kategori(){
				$object['kat']=$this->kategori_model->getDataKategori();
				$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'',
        		'keuangan'=>'',
        		'produk'=>'active',
        		'pembelian'=>'',
        		'pemasukan'=>'',
        		'pengeluaran'=>'',
        		'utang'=>'',
                'labarugi'=>'',
        		'cash_flow'=>'',
        		'neraca'=>'',
                        'pemesanan'=>'',
                        'pembayaran'=>'',
        		'admin'=>'',
        		'gaji'=>'',
        		'golongan'=>'',
        		'absensi'=>'',
        		'user'=>'',
        		'barang'=>'',
        		'supplier'=>'',
        		'kategori'=>'active',
        		);
		
				$this->load->view('component/header',$cek);
				$this->load->view('form_kategori',$object);
				$this->load->view('component/footer');
	}

	public function create(){
		$object['kat']=$this->kategori_model->getDataKategori();
		$this->form_validation->set_rules('nama_kategori','nama_kategori','trim|required');
		$this->load->model('kategori_model');

		if($this->form_validation->run()==FALSE){
			$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'',
        		'keuangan'=>'',
        		'produk'=>'active',
        		'pembelian'=>'',
        		'pemasukan'=>'',
        		'pengeluaran'=>'',
        		'utang'=>'',
                'labarugi'=>'',
        		'cash_flow'=>'',
        		'neraca'=>'',
                        'pemesanan'=>'',
                        'pembayaran'=>'',
        		'admin'=>'',
        		'gaji'=>'',
        		'golongan'=>'',
        		'absensi'=>'',
        		'user'=>'',
        		'barang'=>'',
        		'supplier'=>'',
        		'kategori'=>'active',
        		);
		
		    $object['kat']=$this->kategori_model->getDataKategori();
			$this->load->view('component/header',$cek);
			$this->load->view('form_kategori',$object);
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
			$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'',
        		'keuangan'=>'',
        		'produk'=>'active',
        		'pembelian'=>'',
        		'pemasukan'=>'',
        		'pengeluaran'=>'',
        		'utang'=>'',
                'labarugi'=>'',
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
        		'kategori'=>'active',
        		);
		
		    $object['kat']=$this->kategori_model->getDataKategori();
			$this->load->view('component/header',$cek);
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

}

/* End of file kategori.php */
/* Location: ./application/controllers/kategori.php */
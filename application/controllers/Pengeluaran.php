<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengeluaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('user_model');
		$this->load->model('pengeluaran_model');
		$this->load->helper('html');
		$this->load->library('image_lib');
	}

	public function index()
	{
		$object['pengeluaran']=$this->pengeluaran_model->getDataPengeluaran();
                $object['user']=$this->user_model->getDataUser();
		$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'',
        		'keuangan'=>'active',
        		'produk'=>'',
        		'pembelian'=>'',
        		'pemasukan'=>'',
        		'pengeluaran'=>'active',
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
		$this->load->view('Pengeluaran/view_pengeluaran',$object);
		$this->load->view('component/footer');	
	}

	public function form_pengeluaran()
	{
		$object['pengeluaran']=$this->pengeluaran_model->getDataPengeluaran();
                $object['user']=$this->user_model->getDataUser();
		$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'',
        		'keuangan'=>'active',
        		'produk'=>'',
        		'pembelian'=>'',
        		'pemasukan'=>'',
        		'pengeluaran'=>'active',
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
		$this->load->view('Pengeluaran/form_pengeluaran',$object);
		$this->load->view('component/footer');	
	}

	public function create(){
		$this->form_validation->set_rules('id_user','nama','trim|required');
		$this->form_validation->set_rules('nama_barang','nama_barang','trim|required');
		$this->form_validation->set_rules('harga_satuan','harga_satuan','trim|required');
                $this->form_validation->set_rules('qty','qty','trim|required');
                $this->form_validation->set_rules('total_harga','total_harga','trim|required');
		$this->form_validation->set_rules('tanggal_pengeluaran','tanggal_pengeluaran','trim|required');
                
		if($this->form_validation->run()==FALSE){
			$object['produk']=$this->produk_model->getDataProduk();
		$object['pengeluaran']=$this->pengeluaran_model->getDataPengeluaran();
                $object['user']=$this->user_model->getDataUser();
		
		$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'',
        		'keuangan'=>'active',
        		'produk'=>'',
        		'pembelian'=>'',
        		'pemasukan'=>'',
        		'pengeluaran'=>'active',
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
		$this->load->view('pengeluaran/form_pengeluaran',$object);
		$this->load->view('component/footer');
		}else{
			
			$this->pengeluaran_model->insert();
			redirect('pengeluaran','refresh');
		}
	}

	public function update($id){
		$this->form_validation->set_rules('id_user','nama','trim|required');
                $this->form_validation->set_rules('nama_barang','nama_barang','trim|required');
                $this->form_validation->set_rules('harga_satuan','harga_satuan','trim|required');
                $this->form_validation->set_rules('qty','qty','trim|required');
                $this->form_validation->set_rules('total_harga','total_harga','trim|required');
                $this->form_validation->set_rules('tanggal_pengeluaran','tanggal_pengeluaran','trim|required');
		
		if($this->form_validation->run()==FALSE){

			$object['pengeluaran']=$this->pengeluaran_model->getDataPengeluaran();
                $object['user']=$this->user_model->getDataUser();
			$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'',
        		'keuangan'=>'active',
        		'produk'=>'',
        		'pembelian'=>'',
        		'pemasukan'=>'',
        		'pengeluaran'=>'active',
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
			$this->load->view('pengeluaran/edit_pengeluaran',$object);
			$this->load->view('component/footer');
		}else{
			
			$this->pengeluaran_model->update($id);
			redirect('pengeluaran','refresh');
		}
	}

	public function delete($id)
	{
		$this->pengeluaran_model->delete($id);
		redirect('pengeluaran','refresh');
	}

}

/* End of file Pengeluaran.php */
/* Location: ./application/controllers/Pengeluaran.php */
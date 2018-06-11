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
		    	$object['keluar']=$this->pengeluaran_model->getDataPengeluaran();
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

	public function form_pengeluaran(){
		$object['keluar']=$this->pengeluaran_model->getDataPengeluaran();
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
		$object['keluar']=$this->pengeluaran_model->getDataPengeluaran();
                $object['user']=$this->user_model->getDataUser();

		$this->form_validation->set_rules('id_user','Id User','trim|required');
                $this->form_validation->set_rules('nama_barang','Nama Barang','trim|required');
                $this->form_validation->set_rules('harga_satuan','Harga Satuan','trim|required');
                $this->form_validation->set_rules('qty','Qty','trim|required');
                $this->form_validation->set_rules('total_harga','Total Harga','trim|required');
                $this->form_validation->set_rules('tanggal_pengeluaran','Tanggal Pengeluaran','trim|required');

		$this->load->model('pengeluaran_model');
		
		if($this->form_validation->run()==FALSE){
			
			$object['keluar']=$this->pengeluaran_model->getDataPengeluaran();
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
		}else{
			
			$this->pengeluaran_model->insertPengeluaran();
			$this->load->view('component/header',$cek);
			redirect('pengeluaran','refresh');
			$this->load->view('component/footer');
		}
	}

	public function update($id){
		$this->form_validation->set_rules('id_user','Id User','trim|required');
                $this->form_validation->set_rules('nama_barang','Nama Barang','trim|required');
                $this->form_validation->set_rules('harga_satuan','Harga Satuan','trim|required');
                $this->form_validation->set_rules('qty','Qty','trim|required');
                $this->form_validation->set_rules('total_harga','Total Harga','trim|required');
                $this->form_validation->set_rules('tanggal_pengeluaran','Tanggal Pengeluaran','trim|required');

		$object['keluar']=$this->pengeluaran_model->getPengeluaran($id);
		
		if($this->form_validation->run()==FALSE){
			$object['keluar']=$this->pengeluaran_model->getDataPengeluaran();
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
			$this->load->view('Pengeluaran/edit_pengeluaran',$object);
			$this->load->view('component/footer');
		}else{
			$this->pengeluaran_model->UpdateById($id);
			redirect('pengeluaran','refresh');
		}
	}

	public function delete($id){
		$this->pengeluaran_model->delete($id);
		redirect('pengeluaran','refresh');
	}

}

/* End of file gaji.php */
/* Location: ./application/controllers/gaji.php */
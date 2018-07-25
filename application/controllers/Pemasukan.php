<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasukan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('produk_model');
		$this->load->model('pemasukan_model');
		$this->load->model('supplier_model');
		$this->load->helper('html');
		$this->load->library('image_lib');
	}

	public function index()
	{
		$object['pemasukan']=$this->pemasukan_model->getDataPemasukan();
		$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'',
        		'keuangan'=>'active',
        		'produk'=>'',
        		'pembelian'=>'',
        		'pemasukan'=>'active',
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
		$this->load->view('Pemasukan/view_pemasukan',$object);
		$this->load->view('component/footer');	
	}

	public function form_pemasukan()
	{
		$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'',
        		'keuangan'=>'active',
        		'produk'=>'',
        		'pembelian'=>'',
        		'pemasukan'=>'active',
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
		$this->load->view('Pemasukan/form_pemasukan');
		$this->load->view('component/footer');	
	}

	public function create(){
		$this->form_validation->set_rules('total_pemasukan','Harga Total','trim|required');
		$this->form_validation->set_rules('tanggal','Tanggal','trim|required');
		if($this->form_validation->run()==FALSE){
			redirect('pemasukan/form_pemasukan','refresh');
		}else{
			
			$this->pemasukan_model->insert();
			redirect('pemasukan','refresh');
		}
	}

	public function update($id){
		$this->form_validation->set_rules('total_pemasukan','Harga Total','trim|required');
                $this->form_validation->set_rules('tanggal','Tanggal','trim|required');
		if($this->form_validation->run()==FALSE){

			$cek['status'] = array(
                        'home'=>'',
                        'hrd'=>'',
                        'keuangan'=>'active',
                        'produk'=>'',
                        'pembelian'=>'',
                        'pemasukan'=>'active',
                        'pengeluaran'=>'',
                        'utang'=>'',
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
                        'kategori'=>'',
                        );
                $object['pemasukan']=$this->pemasukan_model->getDataPemasukanId($id);
                $this->load->view('component/header',$cek);
                $this->load->view('Pemasukan/edit_pemasukan',$object);
                $this->load->view('component/footer');
		}else{
			
			$this->pemasukan_model->update($id);
			redirect('pemasukan','refresh');
		}
	}

	public function delete($id)
	{
		$this->pemasukan_model->delete($id);
		redirect('pemasukan','refresh');
	}

}

/* End of file Pembelian.php */
/* Location: ./application/controllers/Pembelian.php */
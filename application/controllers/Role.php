<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		
		$this->load->model('role_model');
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
        		'supplier'=>'',
        		'kategori'=>'active',
        		);
		
		    	$object['role']=$this->role_model->getDataRole();
				$this->load->view('component/header',$cek);
				$this->load->view('role',$object);
				$this->load->view('component/footer');
			
	}	

	public function form_role(){
		$object['role']=$this->role_model->getDataRole();
		$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'',
        		'keuangan'=>'',
        		'produk'=>'active',
        		'pembelian'=>'',
        		'pemasukan'=>'',
                        'pemesanan'=>'',
                'pembayaran'=>'',
                        'labarugi'=>'',
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
        		'kategori'=>'active',
        		);
		
				$this->load->view('component/header',$cek);
				$this->load->view('form_role',$object);
				$this->load->view('component/footer');
	}

	public function create(){
		$object['role']=$this->role_model->getDatRole();
		$this->form_validation->set_rules('nama_role','nama role','trim|required');
		$this->load->model('role_model');

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
        		'admin'=>'',
        		'gaji'=>'',
        		'golongan'=>'',
        		'absensi'=>'',
        		'user'=>'',
        		'barang'=>'',
                        'pemesanan'=>'',
                'pembayaran'=>'',
        		'supplier'=>'',
        		'kategori'=>'active',
        		);
		
		    $object['role']=$this->role_model->getDataRole();
			$this->load->view('component/header',$cek);
			$this->load->view('form_role',$object);
			$this->load->view('component/footer');
		}else{
			
			$this->role_model->insertKategori();
			$this->load->view('component/header');
			redirect('role','refresh');
			$this->load->view('component/footer');
		}
	}

	public function update($id){
		$this->form_validation->set_rules('nama_role','nama role','trim|required');

		$data['role']=$this->role_model->getRole($id);

		if($this->form_validation->run()==FALSE){
			$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'',
        		'keuangan'=>'',
        		'produk'=>'active',
        		'pembelian'=>'',
        		'pemasukan'=>'',
                        'pemesanan'=>'',
                'pembayaran'=>'',
                        'labarugi'=>'',
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
        		'kategori'=>'active',
        		);
		
		    $object['role']=$this->role_model->getDataRole();
			$this->load->view('component/header',$cek);
			$this->load->view('edit_role',$data);
			$this->load->view('component/footer');
		}else{
			$this->role_model->UpdateById($id);
			redirect('role','refresh');
		}
	}

	public function delete($id){
		$this->role_model->delete($id);
		redirect('role','refresh');
	}

}

/* End of file kategori.php */
/* Location: ./application/controllers/kategori.php */
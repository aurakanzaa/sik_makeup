<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		// $this->load->model('admin_model');
		$this->load->model('absensi_model');
		$this->load->helper('html');
		$this->load->library('image_lib');
	}
	public function index()
	{
		$object['absensi']=$this->absensi_model->getDataAbsensi();
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
        		'neraca'=>'',
        		'admin'=>'',
        		'gaji'=>'',
        		'golongan'=>'',
        		'absensi'=>'active',
        		'user'=>'',
        		'barang'=>'',
        		'supplier'=>'',
        		'kategori'=>'',
        		);
		
				$this->load->view('component/header',$cek);
				$this->load->view('absensi',$object);
				$this->load->view('component/footer');
			
	}	

	public function form_absensi(){
		$this->load->view('component/header');
		$this->load->view('form_absensi');
		$this->load->view('component/footer');
	}

	public function create(){
		$object['absensi']=$this->absensi_model->getDataAbsensi();
		$this->form_validation->set_rules('tgl_masuk_jam','tgl_masuk_jam','trim|required');
		$this->form_validation->set_rules('tgl_keluar_jam','tgl_keluar_jam','trim|required');
		$this->form_validation->set_rules('id_admin','id_admin','trim|required');
		$this->load->model('absensi_model');

		if($this->form_validation->run()==FALSE){
			$this->load->view('component/header');
			$this->load->view('form_absensi');
			$this->load->view('component/footer');
		}else{
			
			$this->absensi_model->insertAbsensi();
			$this->load->view('component/header');
			redirect('absensi','refresh');
			$this->load->view('component/footer');
		}
	}

	public function update($id){
		$this->form_validation->set_rules('tgl_masuk_jam','tgl_masuk_jam','trim|required');
		$this->form_validation->set_rules('tgl_keluar_jam','tgl_keluar_jam','trim|required');
		$this->form_validation->set_rules('id_admin','id_admin','trim|required');

		$data['absensi']=$this->absensi_model->getAbsensi($id);

		if($this->form_validation->run()==FALSE){
			$this->load->view('component/header');
			$this->load->view('edit_absensi',$data);
			$this->load->view('component/footer');
		}else{
			$this->absensi_model->UpdateById($id);
			redirect('absensi','refresh');
		}
	}

	public function delete($id){
		$this->absensi_model->delete($id);
		redirect('absensi','refresh');
	}

	// public function insert(){
	// 	$this->penjualan_model->insertData();
	// 	redirect('home','refresh');
	// }
}

/* End of file absensi.php */
/* Location: ./application/controllers/absensi.php */
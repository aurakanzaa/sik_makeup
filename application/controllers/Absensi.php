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
		// if($this->session->userdata('logged_in')){
		// 	$session_data= $this->session->userdata('logged_in');
		// 	if ($session_data['role'] === 'admin') {
		//     	$object['kat']=$this->absensi_model->getDataabsensi();
		// 		$this->load->view('component/header');
		// 		$this->load->view('absensi',$object);
		// 		$this->load->view('component/footer');
			
  //   		}elseif($session_data['role'] === 'kasir'){
  //   			redirect('login','refresh');
  //   		}
		// }else{
		// 	redirect('login','refresh');
		// }	
		
		    	$object['absensi']=$this->absensi_model->getDataAbsensi();
				$this->load->view('component/header');
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
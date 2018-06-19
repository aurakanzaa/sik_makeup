<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('utang_model');
		$this->load->model('user_model');
		$this->load->helper('html');
		$this->load->library('image_lib');
	}

	public function index()
	{
		$object['utang']=$this->utang_model->getDataUtang();
                $object['user']=$this->user_model->getDataUser();

		$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'',
        		'keuangan'=>'active',
        		'produk'=>'',
        		'pembelian'=>'',
        		'pemasukan'=>'',
        		'pengeluaran'=>'',
        		'utang'=>'active',
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
		$this->load->view('utang',$object);
		$this->load->view('component/footer');	
	}

	public function form_utang()
	{
		$object['utang']=$this->utang_model->getDataUtang();
                $object['user']=$this->user_model->getDataUser();
		$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'',
        		'keuangan'=>'active',
        		'produk'=>'',
        		'pembelian'=>'',
        		'pemasukan'=>'',
        		'pengeluaran'=>'',
        		'utang'=>'active',
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
		$this->load->view('form_utang',$object);
		$this->load->view('component/footer');	
	}

	public function create(){
		$this->form_validation->set_rules('id_user','id user','trim|required');
                $this->form_validation->set_rules('nama_barang','nama_barang','trim|required');
                $this->form_validation->set_rules('total_utang','Total Utang','trim|required');
                $this->form_validation->set_rules('jml_utang','jml_utang','trim|required');
                $this->form_validation->set_rules('sisa_utang','sisa_utang','trim|required');

                $cek['status'] = array(
                        'home'=>'',
                        'hrd'=>'',
                        'keuangan'=>'active',
                        'produk'=>'',
                        'pembelian'=>'',
                        'pemasukan'=>'',
                        'pengeluaran'=>'',
                        'utang'=>'active',
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

		if($this->form_validation->run()==FALSE){

                        $object['utang']=$this->utang_model->getDataUtang();
                        $object['user']=$this->user_model->getDataUser();
		
		      
		      $this->load->view('component/header',$cek);
		      $this->load->view('form_utang',$object);
		      $this->load->view('component/footer');
		}else{
			
		      $this->utang_model->insertUtang();
                      $this->load->view('component/header',$cek);
                      redirect('utang','refresh');
                      $this->load->view('component/footer');
		     
		}
	}

	public function update($id){
		$this->form_validation->set_rules('id_user','id user','trim|required');
		$this->form_validation->set_rules('nama_barang','nama_barang','trim|required');
		$this->form_validation->set_rules('total_utang','Total Utang','trim|required');
		$this->form_validation->set_rules('jml_utang','jml_utang','trim|required');
                $this->form_validation->set_rules('sisa_utang','sisa_utang','trim|required');
		
		if($this->form_validation->run()==FALSE){

		      $object['utang']=$this->utang_model->getUtang($id);
                      $object['user']=$this->user_model->getDataUser();

			$cek['status'] = array(
        		      'home'=>'',
        		      'hrd'=>'',
        		      'keuangan'=>'active',
        		      'produk'=>'',
        		      'pembelian'=>'',
        		      'pemasukan'=>'',
        		      'pengeluaran'=>'',
        		      'utang'=>'active',
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
			$this->load->view('edit_utang',$object);
			$this->load->view('component/footer');
		}else{
			
			$this->utang_model->updateById($id);
			redirect('utang','refresh');
		}
	}

	public function delete($id)
	{
		$this->utang_model->delete($id);
		redirect('utang','refresh');
	}

}

/* End of file Pembelian.php */
/* Location: ./application/controllers/Pembelian.php */
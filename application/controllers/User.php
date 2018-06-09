<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('user_model');
		$this->load->helper('html');
		$this->load->library('image_lib');
	}

	public function index()
	{
		$object['user']=$this->user_model->getDataUser();
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
        		'absensi'=>'',
        		'user'=>'active',
        		'barang'=>'',
        		'supplier'=>'',
        		'kategori'=>'',
        		);
		$this->load->view('component/header',$cek);
		$this->load->view('user',$object);
		$this->load->view('component/footer');	
	}

	public function form_user()
	{
		$object['user']=$this->produk_model->getDataUser();
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
                        'absensi'=>'',
                        'user'=>'active',
                        'barang'=>'',
                        'supplier'=>'',
                        'kategori'=>'',
                        );
		$this->load->view('component/header',$cek);
		$this->load->view('form_user',$object);
		$this->load->view('component/footer');	
	}

	public function create(){
		$this->form_validation->set_rules('id_role','id_role','trim|required');
		$this->form_validation->set_rules('nama','nama','trim|required');
		$this->form_validation->set_rules('alamat','alamat','trim|required');
                $this->form_validation->set_rules('email','email','trim|required');
                $this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','trim|required');
                $this->form_validation->set_rules('no_telp','no_telp','trim|required');
                $object['user']=$this->user_model->getDataUser();
                
		if($this->form_validation->run()==FALSE){
		
		$object['user']=$this->user_model->getDataUser();
		
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
                        'absensi'=>'',
                        'user'=>'active',
                        'barang'=>'',
                        'supplier'=>'',
                        'kategori'=>'',
                        );
		$this->load->view('component/header',$cek);
		$this->load->view('form_user',$object);
		$this->load->view('component/footer');
		}else{
			
			$this->user_model->insert();
			redirect('user','refresh');
		}
	}

	public function update($id){
		$this->form_validation->set_rules('id_role','id_role','trim|required');
                $this->form_validation->set_rules('nama','nama','trim|required');
                $this->form_validation->set_rules('alamat','alamat','trim|required');
                $this->form_validation->set_rules('email','email','trim|required');
                $this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','trim|required');
                $this->form_validation->set_rules('no_telp','no_telp','trim|required');
                $object['user']=$this->user_model->getDataUser();
                
		if($this->form_validation->run()==FALSE){

			$object['user']=$this->user_model->getUser($id);
			
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
                        'absensi'=>'',
                        'user'=>'active',
                        'barang'=>'',
                        'supplier'=>'',
                        'kategori'=>'',
                        );
			$this->load->view('component/header',$cek);
			$this->load->view('edit_user',$object);
			$this->load->view('component/footer');
		}else{
			
			$this->user_model->update($id);
			redirect('user','refresh');
		}
	}

	public function delete($id)
	{
		$this->user_model->delete($id);
		redirect('user','refresh');
	}

}

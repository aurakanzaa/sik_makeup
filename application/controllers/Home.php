<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('admin_model');
		$this->load->model('role_model');
        $this->load->model('golongan_model');
        $this->load->model('pembayaran_model');
		$this->load->helper('html');
		$this->load->library('image_lib');
		$this->load->model('Model_login');
	}

	public function index()
	{
		$where = array(
            'username' => 'admin',
            'password' => md5('admin')
            );
        $cek['dat'] = $this->Model_login->cek_login("admin",$where);
        $object['admin']=$this->admin_model->getAdmin($this->session->userdata('userSession')['id']);
        $object['role']=$this->role_model->getRole($this->session->userdata('userSession')['role']);
        $object['golongan']=$this->golongan_model->getGolongan($this->session->userdata('userSession')['gol']);
        $object['penjualan']=$this->pembayaran_model->chartPemasukan();
        $cek['status'] = array(
        		'home'=>'active',
        		'hrd'=>'',
        		'keuangan'=>'',
        		'produk'=>'',
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
        		'kategori'=>'',
        		);
		$this->load->view('component/header',$cek);
		$this->load->view('home',$object);
		$this->load->view('component/footer');
	}

    
        








}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
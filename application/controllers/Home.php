<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		// $this->load->model('kasir_model');
		// $this->load->model('kategori_model');
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
        $cek['status'] = array(
        		'home'=>'active',
        		'hrd'=>'',
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
        		'user'=>'',
        		'barang'=>'',
        		'supplier'=>'',
        		'kategori'=>'',
        		);
		$this->load->view('component/header',$cek);
		$this->load->view('home',$cek);
		$this->load->view('component/footer');
	}


}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
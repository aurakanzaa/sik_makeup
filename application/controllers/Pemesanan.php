<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('produk_model');
		$this->load->model('user_model');
        $this->load->model('pemesanan_model');
		$this->load->helper('html');
		$this->load->library('image_lib');
	}

	public function index()
	{
		$object['produk']=$this->produk_model->getDataProduk();
        $object['pemesanan']=$this->pemesanan_model->getDataPemesanan();
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
		$this->load->view('pemesanan',$object);
		$this->load->view('component/footer');	
	}

	public function form_utang()
	{
		$object['produk']=$this->produk_model->getDataProduk();
        $object['pemesanan']=$this->pemesanan_model->getDataPemesanan();
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
		$this->load->view('form_pemesanan',$object);
		$this->load->view('component/footer');	
	}

	public function create(){
		$this->form_validation->set_rules('id_user','id user','trim|required');
        $this->form_validation->set_rules('id_produk','id_produk','trim|required');
        $this->form_validation->set_rules('qty','qty','trim|required');
        $this->form_validation->set_rules('tanggal_pemesanan','tanggal_pemesanan','trim|required');
        
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

                $object['produk']=$this->produk_model->getDataProduk();
                $object['pemesanan']=$this->pemesanan_model->getDataPemesanan();
                $object['user']=$this->user_model->getDataUser();
		
		      
		      $this->load->view('component/header',$cek);
		      $this->load->view('form_pemesanan',$object);
		      $this->load->view('component/footer');
		}else{
			
		      $this->pemesanan_model->insertPemesanan();
                      $this->load->view('component/header',$cek);
                      redirect('pemesanan','refresh');
                      $this->load->view('component/footer');
		     
		}
	}

	public function update($id){
		$this->form_validation->set_rules('id_user','id user','trim|required');
        $this->form_validation->set_rules('id_produk','id_produk','trim|required');
        $this->form_validation->set_rules('qty','qty','trim|required');
        $this->form_validation->set_rules('tanggal_pemesanan','tanggal_pemesanan','trim|required');
		
		if($this->form_validation->run()==FALSE){


            $object['produk']=$this->produk_model->getDataProduk();
            $object['pemesanan']=$this->pemesanan_model->getPemesanan($id);
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
			$this->load->view('edit_pemesanan',$object);
			$this->load->view('component/footer');
		}else{
			
			$this->pemesanan_model->updateById($id);
			redirect('pemesanan','refresh');
		}
	}

	public function delete($id)
	{
		$this->pemesanan_model->delete($id);
		redirect('pemesanan','refresh');
	}

}

/* End of file Pembelian.php */
/* Location: ./application/controllers/Pembelian.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('pembayaran_model');
        $this->load->model('pemesanan_model');
		$this->load->helper('html');
		$this->load->library('image_lib');
	}

	public function index()
	{
		$object['pembayaran']=$this->pembayaran_model->getDataPembayaran();
        $object['pemesanan']=$this->pemesanan_model->getDataPemesanan();

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
		$this->load->view('pembayaran',$object);
		$this->load->view('component/footer');	
	}

	public function form_utang()
	{
		$object['pembayaran']=$this->pembayaran_model->getDataPembayaran();
        $object['pemesanan']=$this->pemesanan_model->getDataPemesanan();

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
		$this->load->view('form_pembayaran',$object);
		$this->load->view('component/footer');	
	}

	public function create(){
		$this->form_validation->set_rules('id_pemesanan','id_pemesanan','trim|required');
        $this->form_validation->set_rules('total_pembayaran','total_pembayaran','trim|required');
        $this->form_validation->set_rules('tgl_pembayaran','tgl_pembayaran','trim|required');
        
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

                $object['pembayaran']=$this->pembayaran_model->getDataPembayaran();
                $object['pemesanan']=$this->pemesanan_model->getDataPemesanan();
		
		      
		      $this->load->view('component/header',$cek);
		      $this->load->view('form_pembayaran',$object);
		      $this->load->view('component/footer');
		}else{
			
		      $this->pembayaran_model->insertPemayaran();
                      $this->load->view('component/header',$cek);
                      redirect('pembayaran','refresh');
                      $this->load->view('component/footer');
		     
		}
	}

	public function update($id){
		$this->form_validation->set_rules('id_pemesanan','id_pemesanan','trim|required');
        $this->form_validation->set_rules('total_pembayaran','total_pembayaran','trim|required');
        $this->form_validation->set_rules('tgl_pembayaran','tgl_pembayaran','trim|required');
		
		if($this->form_validation->run()==FALSE){


            $object['pembayaran']=$this->pembayaran_model->getPembayaran($id);
            $object['pemesanan']=$this->pemesanan_model->getDataPemesanan();

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
			$this->load->view('edit_pembayaran',$object);
			$this->load->view('component/footer');
		}else{
			
			$this->pembayaran_model->updateById($id);
			redirect('pembayaran','refresh');
		}
	}

	public function delete($id)
	{
		$this->pembayaran_model->delete($id);
		redirect('pembayaran','refresh');
	}

}

/* End of file Pembelian.php */
/* Location: ./application/controllers/Pembelian.php */
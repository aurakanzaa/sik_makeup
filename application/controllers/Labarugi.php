<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Labarugi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('labarugi_model');
		$this->load->model('user_model');
		$this->load->helper('html');
		$this->load->library('image_lib');
	}

	public function index()
	{
		$object['labarugi']=$this->labarugi_model->getDataLabarugi();
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
		$this->load->view('labarugi',$object);
		$this->load->view('component/footer');	
	}

	public function form_labarugi()
	{
		$object['labarugi']=$this->labarugi_model->getDataLabarugi();
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
		$this->load->view('form_labarugi',$object);
		$this->load->view('component/footer');	
	}

	public function create(){
        $this->form_validation->set_rules('id_user','id user','trim|required');
        $this->form_validation->set_rules('penjualan','penjualan','trim|required');
        $this->form_validation->set_rules('retur_penjualan','retur_penjualan','trim|required');
        $this->form_validation->set_rules('potongan_penjualan','potongan_penjualan','trim|required');
        $this->form_validation->set_rules('jml_retur_potongan_penjualan','jml_retur_potongan_penjualan','trim|required');
        $this->form_validation->set_rules('penjualan_bersih','penjualan_bersih','trim|required');
        $this->form_validation->set_rules('harga_pokok_penjualan','harga_pokok_penjualan','trim|required');
        $this->form_validation->set_rules('laba_bruto','laba_bruto','trim|required');
        $this->form_validation->set_rules('biaya_operasional','biaya_operasional','trim|required');
        $this->form_validation->set_rules('biaya_adm_umum','biaya_adm_umum','trim|required');
        $this->form_validation->set_rules('total_biaya','total_biaya','trim|required');
        $this->form_validation->set_rules('laba_usaha_bersih','laba_usaha_bersih','trim|required');
        $this->form_validation->set_rules('tanggal','tanggal','trim|required');

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

		if($this->form_validation->run()==FALSE){
            $object['labarugi']=$this->labarugi_model->getDataLabarugi();
            $object['user']=$this->user_model->getDataUser();

            $this->load->view('component/header',$cek);
		    $this->load->view('form_labarugi',$object);
		    $this->load->view('component/footer');
		}else{
            $this->labarugi_model->insertLabarugi();
            $this->load->view('component/header',$cek);
            redirect('labarugi','refresh');
            $this->load->view('component/footer');
		     
		}
	}

	public function update($id){
        $this->form_validation->set_rules('id_user','id user','trim|required');
        $this->form_validation->set_rules('penjualan','penjualan','trim|required');
        $this->form_validation->set_rules('retur_penjualan','retur_penjualan','trim|required');
        $this->form_validation->set_rules('potongan_penjualan','potongan_penjualan','trim|required');
        $this->form_validation->set_rules('jml_retur_potongan_penjualan','jml_retur_potongan_penjualan','trim|required');
        $this->form_validation->set_rules('penjualan_bersih','penjualan_bersih','trim|required');
        $this->form_validation->set_rules('harga_pokok_penjualan','harga_pokok_penjualan','trim|required');
        $this->form_validation->set_rules('laba_bruto','laba_bruto','trim|required');
        $this->form_validation->set_rules('biaya_operasional','biaya_operasional','trim|required');
        $this->form_validation->set_rules('biaya_adm_umum','biaya_adm_umum','trim|required');
        $this->form_validation->set_rules('total_biaya','total_biaya','trim|required');
        $this->form_validation->set_rules('laba_usaha_bersih','laba_usaha_bersih','trim|required');
        $this->form_validation->set_rules('tanggal','tanggal','trim|required');

		if($this->form_validation->run()==FALSE){
            $object['labarugi']=$this->labarugi_model->getLabarugi($id);
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
			$this->load->view('edit_labarugi',$object);
			$this->load->view('component/footer');
		}else{
			
			$this->labarugi_model->updateById($id);
			redirect('labarugi','refresh');
		}
	}

	public function delete($id)
	{
		$this->labarugi_model->delete($id);
		redirect('labarugi','refresh');
	}

}

/* End of file Pembelian.php */
/* Location: ./application/controllers/Pembelian.php */
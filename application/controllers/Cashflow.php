<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cashflow extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('utang_model');
        $this->load->model('cashflow_model');
        $this->load->model('pembayaran_model');
        $this->load->model('pengeluaran_model');
		$this->load->model('user_model');
        $this->load->model('pembelian_model');
		$this->load->helper('html');
		$this->load->library('image_lib');
	}

	public function index()
	{
		$object['utang']=$this->utang_model->getDataUtang();
        $object['user']=$this->user_model->getDataUser();
        $object['cashflow']=$this->cashflow_model->getDataCashflow();
        $object['totalcashflow']=$this->cashflow_model->getDataTotalCashflow();


		$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'',
        		'keuangan'=>'active',
        		'produk'=>'',
        		'pembelian'=>'',
        		'pemasukan'=>'',
        		'pengeluaran'=>'',
        		'utang'=>'',
                
                'labarugi'=>'',
        		'cash_flow'=>'active',
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
		$this->load->view('cashflow',$object);
		$this->load->view('component/footer');	
	}
    public function Filter()
    {
       $this->form_validation->set_rules('tahun','Tahun','trim|required');

            $cek['status'] = array(
                'home'=>'',
                'hrd'=>'',
                'keuangan'=>'active',
                'produk'=>'',
                'pembelian'=>'',
                'pemasukan'=>'',
                'pengeluaran'=>'',
                'utang'=>'',
                'labarugi'=>'',
                'cash_flow'=>'active',
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

            redirect('Cashflow','refresh');
        }else{
            
            $object['cashflow']=$this->cashflow_model->getFilterCashflow($this->input->post('bulan'), $this->input->post('tahun'));
            $object['totalcashflow']=$this->cashflow_model->getFilterTotalCashflow($this->input->post('bulan'), $this->input->post('tahun'));
            $this->load->view('component/header',$cek);
            $this->load->view('cashflow',$object);
            $this->load->view('component/footer');
             
        }
    }
	public function form_cashflow()
	{
		$object['utang']=$this->utang_model->getDataUtang();
        $object['pembayaran']=$this->pembayaran_model->getDataPembayaran();
        $object['pengeluaran']=$this->pengeluaran_model->getDataPengeluaran();
        $object['user']=$this->user_model->getDataUser();
        $object['pembelian']=$this->pembelian_model->getDataPembelian();
        $object['cashflow']=$this->cashflow_model->getDataCashflow();

		$cek['status'] = array(
                'home'=>'',
                'hrd'=>'',
                'keuangan'=>'active',
                'produk'=>'',
                'pembelian'=>'',
                'pemasukan'=>'',
                'pengeluaran'=>'',
                'utang'=>'',
                'labarugi'=>'',
                'cash_flow'=>'active',
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
		$this->load->view('form_cashflow',$object);
		$this->load->view('component/footer');	
	}

	public function create(){
        $this->form_validation->set_rules('id_user','id user','trim|required');
        $this->form_validation->set_rules('id_pembayaran','id_pembayaran','trim|required');
        $this->form_validation->set_rules('id_pengeluaran','id_pengeluaran','trim|required');
        $this->form_validation->set_rules('id_utang','id_utang','trim|required');
        $this->form_validation->set_rules('id_pembelian','id_pembelian','trim|required');

            $cek['status'] = array(
                'home'=>'',
                'hrd'=>'',
                'keuangan'=>'active',
                'produk'=>'',
                'pembelian'=>'',
                'pemasukan'=>'',
                'pengeluaran'=>'',
                'utang'=>'',
                'labarugi'=>'',
                'cash_flow'=>'active',
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

            $object['utang']=$this->utang_model->getDataUtang();
            $object['pembayaran']=$this->pembayaran_model->getDataPembayaran();
            $object['pengeluaran']=$this->pengeluaran_model->getDataPengeluaran();
            $object['user']=$this->user_model->getDataUser();
            $object['pembelian']=$this->pembelian_model->getDataPembelian();
            $object['cashflow']=$this->cashflow_model->getDataCashflow();
		
		      
		      $this->load->view('component/header',$cek);
		      $this->load->view('form_cashflow',$object);
		      $this->load->view('component/footer');
		}else{
			
		    $this->cashflow_model->insertCashFlow();
            $this->load->view('component/header',$cek);
            redirect('cashflow','refresh');
            $this->load->view('component/footer');
		     
		}
	}

	public function update($id){
		$this->form_validation->set_rules('id_user','id user','trim|required');
        $this->form_validation->set_rules('id_pembayaran','id_pembayaran','trim|required');
        $this->form_validation->set_rules('id_pengeluaran','id_pengeluaran','trim|required');
        $this->form_validation->set_rules('id_utang','id_utang','trim|required');
        $this->form_validation->set_rules('id_pembelian','id_pembelian','trim|required');

        $cek['status'] = array(
                'home'=>'',
                'hrd'=>'',
                'keuangan'=>'active',
                'produk'=>'',
                'pembelian'=>'',
                'pemasukan'=>'',
                'pengeluaran'=>'',
                'utang'=>'',
                'labarugi'=>'',
                'cash_flow'=>'active',
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
            $object['utang']=$this->utang_model->getDataUtang();
            $object['pembayaran']=$this->pembayaran_model->getDataPembayaran();
            $object['pengeluaran']=$this->pengeluaran_model->getDataPengeluaran();
            $object['user']=$this->user_model->getDataUser();
            $object['pembelian']=$this->pembelian_model->getDataPembelian();
            $object['cashflow']=$this->cashflow_model->getDataCashflow();

			$this->load->view('component/header',$cek);
			$this->load->view('edit_cashflow',$object);
			$this->load->view('component/footer');
		}else{
			
			$this->cashflow_model->updateById($id);
			redirect('cashflow','refresh');
		}
	}

	public function delete($id)
	{
		$this->cashflow_model->delete($id);
		redirect('cashflow','refresh');
	}

}

/* End of file Pembelian.php */
/* Location: ./application/controllers/Pembelian.php */
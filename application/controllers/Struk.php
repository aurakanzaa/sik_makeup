<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
        $this->load->model('cashflow_model');
		$this->load->model('user_model');
        $this->load->model('struk_model');
		$this->load->helper('html');
		$this->load->library('image_lib');
	}

	public function index()
	{
        $object['user']=$this->user_model->getDataUser();
        $object['struk']=$this->struk_model->getDataStruk();
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
        		'cash_flow'=>'active',
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
		$this->load->view('struk',$object);
		$this->load->view('component/footer');	
	}

	public function form_cashflow()
	{
		$object['user']=$this->user_model->getDataUser();
        $object['struk']=$this->struk_model->getDataStruk();
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
                'cash_flow'=>'active',
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
		$this->load->view('form_struk',$object);
		$this->load->view('component/footer');	
	}

	public function create(){
        $this->form_validation->set_rules('id_transaksi','id transaksi','trim|required');
        $this->form_validation->set_rules('id_user','id user','trim|required');

            $cek['status'] = array(
                'home'=>'',
                'hrd'=>'',
                'keuangan'=>'active',
                'produk'=>'',
                'pembelian'=>'',
                'pemasukan'=>'',
                'pengeluaran'=>'',
                'utang'=>'',
                'cash_flow'=>'active',
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

            $object['user']=$this->user_model->getDataUser();
            $object['struk']=$this->struk_model->getDataStruk();
            $object['cashflow']=$this->cashflow_model->getDataCashflow();
		
		      
		      $this->load->view('component/header',$cek);
		      $this->load->view('form_struk',$object);
		      $this->load->view('component/footer');
		}else{
			
		    $this->struk_model->insertStruk();
            $this->load->view('component/header',$cek);
            redirect('struk','refresh');
            $this->load->view('component/footer');
		     
		}
	}

	public function update($id){
		$this->form_validation->set_rules('id_transaksi','id transaksi','trim|required');
        $this->form_validation->set_rules('id_user','id user','trim|required');
        

        $cek['status'] = array(
                'home'=>'',
                'hrd'=>'',
                'keuangan'=>'active',
                'produk'=>'',
                'pembelian'=>'',
                'pemasukan'=>'',
                'pengeluaran'=>'',
                'utang'=>'',
                'cash_flow'=>'active',
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
            $object['user']=$this->user_model->getDataUser();
            $object['struk']=$this->struk_model->getDataStruk();
            $object['cashflow']=$this->cashflow_model->getDataCashflow();

			$this->load->view('component/header',$cek);
			$this->load->view('edit_struk',$object);
			$this->load->view('component/footer');
		}else{
			
			$this->struk_model->updateById($id);
			redirect('struk','refresh');
		}
	}

	public function delete($id)
	{
		$this->struk_model->delete($id);
		redirect('struk','refresh');
	}

}

/* End of file Pembelian.php */
/* Location: ./application/controllers/Pembelian.php */
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
        $this->load->model('perubahanmodal_model');
		$this->load->library('image_lib');
        $this->load->model('cetak_model');
        $this->load->library('dompdf_gen');
        $this->load->helper('file');
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
		$this->load->view('labarugi/labarugi_view',$object);
		$this->load->view('component/footer');	
	}
    public function detail($id)
    {
        $object['labarugi']=$this->labarugi_model->getLabarugi($id);
        $object['perubahan']=$this->perubahanmodal_model->getPerubahanModals($id);
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
        $this->load->view('labarugi/labarugi_detail',$object);
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
		$this->load->view('labarugi/labarugi_form',$object);
		$this->load->view('component/footer');	
	}

	public function create(){
        $this->form_validation->set_rules('penjualan','penjualan','trim|required');
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
            redirect('labarugi','refresh');
		}else{
            $this->labarugi_model->insertLabarugi();
            $query=$this->labarugi_model->getLabarugiLast();
            $this->perubahanmodal_model->insertPerubahanmodal($query[0]->id_labarugi);
            redirect('labarugi','refresh'); 
		}
	}

	public function update($id){
        $this->form_validation->set_rules('penjualan','penjualan','trim|required');
		if($this->form_validation->run()==FALSE){
            $object['labarugi']=$this->labarugi_model->getLabarugi($id);
            $object['perubahan']=$this->perubahanmodal_model->getPerubahanmodals($id);
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
			$this->load->view('labarugi/edit_labarugi',$object);
			$this->load->view('component/footer');
		}else{
			
			$this->labarugi_model->updateById($id);
            $this->perubahanmodal_model->UpdateById($id);
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
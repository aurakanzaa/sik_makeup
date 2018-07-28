<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perubahanmodal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
        $this->load->model('perubahanmodal_model');
		$this->load->model('labarugi_model');
		$this->load->model('user_model');
		$this->load->helper('html');
		$this->load->library('image_lib');
	}

	public function index()
	{
		$object['modal']=$this->perubahanmodal_model->getDataPerubahanmodal();
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
                'labarugi'=>'',
                'pemesanan'=>'',
                'pembayaran'=>'',
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
		$this->load->view('perubahanmodal',$object);
		$this->load->view('component/footer');	
	}

	public function form_perubahanmodal()
	{
		$object['modal']=$this->perubahanmodal_model->getDataPerubahanmodal();
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
                'labarugi'=>'',
        		'cash_flow'=>'',
        		'neraca'=>'',
                'pemesanan'=>'',
                'pembayaran'=>'',
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
		$this->load->view('form_perubahanmodal',$object);
		$this->load->view('component/footer');	
	}

	public function create(){
        $this->form_validation->set_rules('id_user','id user','trim|required');
        $this->form_validation->set_rules('id_laba','id_laba','trim|required');
        $this->form_validation->set_rules('modal_awal','modal_awal','trim|required');
        $this->form_validation->set_rules('laba_bersih','laba_bersih','trim|required');
        $this->form_validation->set_rules('prive','prive','trim|required');
        $this->form_validation->set_rules('total','total','trim|required');
        $this->form_validation->set_rules('modal_akhir','modal_akhir','trim|required');
        

                $cek['status'] = array(
                        'home'=>'',
                        'hrd'=>'',
                        'keuangan'=>'active',
                        'produk'=>'',
                        'pembelian'=>'',
                        'pemasukan'=>'',
                        'pengeluaran'=>'',
                        'pemesanan'=>'',
                'pembayaran'=>'',
                        'utang'=>'active',
                'labarugi'=>'',
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
            $object['modal']=$this->perubahanmodal_model->getDataPerubahanmodal();
            $object['labarugi']=$this->labarugi_model->getDataLabarugi();
            $object['user']=$this->user_model->getDataUser();

            $this->load->view('component/header',$cek);
		    $this->load->view('form_perubahanmodal',$object);
		    $this->load->view('component/footer');
		}else{
            $this->perubahanmodal_model->insertPerubahanmodal();
            $this->load->view('component/header',$cek);
            redirect('perubahanmodal','refresh');
            $this->load->view('component/footer');
		     
		}
	}

	public function update($id){
        $this->form_validation->set_rules('id_user','id user','trim|required');
        $this->form_validation->set_rules('id_laba','id_laba','trim|required');
        $this->form_validation->set_rules('modal_awal','modal_awal','trim|required');
        $this->form_validation->set_rules('laba_bersih','laba_bersih','trim|required');
        $this->form_validation->set_rules('prive','prive','trim|required');
        $this->form_validation->set_rules('total','total','trim|required');
        $this->form_validation->set_rules('modal_akhir','modal_akhir','trim|required');
        

		if($this->form_validation->run()==FALSE){
            $object['modal']=$this->perubahanmodal_model->getPerubahanmodal($id);
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
                      'pemesanan'=>'',
                'pembayaran'=>'',
        		      'utang'=>'active',
                'labarugi'=>'',
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
			$this->load->view('edit_perubahanmodal',$object);
			$this->load->view('component/footer');
		}else{
			
			$this->perubahanmodal_model->updateById($id);
			redirect('perubahanmodal','refresh');
		}
	}

	public function delete($id)
	{
		$this->perubahanmodal_model->delete($id);
		redirect('perubahanmodal','refresh');
	}

}

/* End of file Pembelian.php */
/* Location: ./application/controllers/Pembelian.php */
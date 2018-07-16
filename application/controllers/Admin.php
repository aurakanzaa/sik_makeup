<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
        $this->load->model('admin_model');
		$this->load->model('role_model');
        $this->load->model('golongan_model');
		$this->load->helper('html');
		$this->load->library('image_lib');
	}

	public function index()
	{
        $object['admin']=$this->admin_model->getDataAdmin();
        $object['role']=$this->role_model->getDataRole();
        $object['gol']=$this->golongan_model->getDataGolongan();


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
                'pemesanan'=>'',
                'pembayaran'=>'',
        		'neraca'=>'',
        		'admin'=>'active',
        		'gaji'=>'',
        		'golongan'=>'',
        		'absensi'=>'',
        		'user'=>'',
        		'barang'=>'',
        		'supplier'=>'',
        		'kategori'=>'',
        		);
		$this->load->view('component/header',$cek);
		$this->load->view('admin',$object);
		$this->load->view('component/footer');	
	}

	public function form_admin()
	{
		$object['admin']=$this->admin_model->getDataAdmin();
        $object['role']=$this->role_model->getDataRole();
        $object['gol']=$this->golongan_model->getDataGolongan();

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
                'pemesanan'=>'',
                'pembayaran'=>'',
                'neraca'=>'',
                'admin'=>'active',
                'gaji'=>'',
                'golongan'=>'',
                'absensi'=>'',
                'user'=>'',
                'barang'=>'',
                'supplier'=>'',
                'kategori'=>'',
                );
		$this->load->view('component/header',$cek);
		$this->load->view('form_admin',$object);
		$this->load->view('component/footer');	
	}

	public function create(){
        $this->form_validation->set_rules('id_role','id_role','trim|required');
        $this->form_validation->set_rules('id_golongan','id golongan','trim|required');
        $this->form_validation->set_rules('username','username','trim|required');
        $this->form_validation->set_rules('password','password','trim|required');
        $this->form_validation->set_rules('foto','foto','trim|required');

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
                'pemesanan'=>'',
                'pembayaran'=>'',
                'neraca'=>'',
                'admin'=>'active',
                'gaji'=>'',
                'golongan'=>'',
                'absensi'=>'',
                'user'=>'',
                'barang'=>'',
                'supplier'=>'',
                'kategori'=>'',
                );

		if($this->form_validation->run()==FALSE){

            $object['admin']=$this->admin_model->getDataAdmin();
            $object['role']=$this->role_model->getDataRole();
            $object['gol']=$this->golongan_model->getDataGolongan();
		
		      
		      $this->load->view('component/header',$cek);
		      $this->load->view('form_admin',$object);
		      $this->load->view('component/footer');
		}else{
			
		    $this->admin_model->insertAdmin();
            $this->load->view('component/header',$cek);
            redirect('admin','refresh');
            $this->load->view('component/footer');
		     
		}
	}

	public function update($id){
		$this->form_validation->set_rules('id_role','id_role','trim|required');
        $this->form_validation->set_rules('id_golongan','id golongan','trim|required');
        $this->form_validation->set_rules('username','username','trim|required');
        $this->form_validation->set_rules('password','password','trim|required');
        $this->form_validation->set_rules('foto','foto','trim|required');
        

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
                'pemesanan'=>'',
                'pembayaran'=>'',
                'neraca'=>'',
                'admin'=>'active',
                'gaji'=>'',
                'golongan'=>'',
                'absensi'=>'',
                'user'=>'',
                'barang'=>'',
                'supplier'=>'',
                'kategori'=>'',
                );
		
		if($this->form_validation->run()==FALSE){
            $object['admin']=$this->admin_model->getAdmin($id);
            $object['role']=$this->role_model->getDataRole();
            $object['gol']=$this->golongan_model->getDataGolongan();

			$this->load->view('component/header',$cek);
			$this->load->view('edit_admin',$object);
			$this->load->view('component/footer');
		}else{
			
			$this->admin_model->updateById($id);
			redirect('admin','refresh');
		}
	}

	public function delete($id)
	{
		$this->admin_model->delete($id);
		redirect('admin','refresh');
	}

}

/* End of file Pembelian.php */
/* Location: ./application/controllers/Pembelian.php */
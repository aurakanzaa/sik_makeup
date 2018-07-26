<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('kategori_model');
		$this->load->model('produk_model');
		$this->load->model('kategori_model');
		$this->load->helper('html');
		$this->load->library('image_lib');
	}
	public function index()
	{		
		    	$object['pro']=$this->produk_model->getDataProduk();
		    	$object['kategori']=$this->kategori_model->getDataKategori();
		    	$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'',
        		'keuangan'=>'',
        		'produk'=>'active',
        		'pembelian'=>'',
        		'pemasukan'=>'',
        		'pengeluaran'=>'',
        		'utang'=>'',
        		'pemesanan'=>'',
                'pembayaran'=>'',
        		'cash_flow'=>'',
        		'neraca'=>'',
        		'admin'=>'',
        		'gaji'=>'',
        		'golongan'=>'',
        		'absensi'=>'',
        		'user'=>'',
        		'barang'=>'active',
        		'supplier'=>'',
        		'kategori'=>'',
        		);
				$this->load->view('component/header',$cek);
				$this->load->view('produk',$object);
				$this->load->view('component/footer');
			
	}	

	public function form_produk(){
		$object['kategori']=$this->kategori_model->getDataKategori();
		$object['pro']=$this->produk_model->getDataProduk();
		    	$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'',
        		'keuangan'=>'',
        		'produk'=>'active',
        		'pembelian'=>'',
        		'pemasukan'=>'',
        		'pengeluaran'=>'',
        		'pemesanan'=>'',
                'pembayaran'=>'',
        		'utang'=>'',
        		'cash_flow'=>'',
        		'neraca'=>'',
        		'admin'=>'',
        		'gaji'=>'',
        		'golongan'=>'',
        		'absensi'=>'',
        		'user'=>'',
        		'barang'=>'active',
        		'supplier'=>'',
        		'kategori'=>'',
        		);
		$this->load->view('component/header',$cek);
		$this->load->view('form_produk',$object);
		$this->load->view('component/footer');
	}

	public function create(){
		$object['pro']=$this->produk_model->getDataProduk();
		$this->form_validation->set_rules('nama_produk','nama_produk','trim|required');
		$this->form_validation->set_rules('stok','stok','trim|required');
		$this->form_validation->set_rules('harga_jual','harga','trim|required');
		$this->form_validation->set_rules('harga_beli','harga','trim|required');
		$this->form_validation->set_rules('id_kategori','id_kategori','trim|required');
		$this->form_validation->set_rules('deskripsi','deskripsi','trim|required');
		

		$this->load->model('produk_model');
		$this->load->model('kategori_model');
		$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'',
        		'keuangan'=>'',
        		'produk'=>'active',
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
        		'pemesanan'=>'',
                'pembayaran'=>'',
        		'barang'=>'active',
        		'supplier'=>'',
        		'kategori'=>'',
        	);

		if($this->form_validation->run()==FALSE){
			$object['kategori']=$this->kategori_model->getDataKategori();
			$object['pro']=$this->produk_model->getDataProduk();	
			$this->load->view('component/header',$cek);
			$this->load->view('form_produk',$object);
			$this->load->view('component/footer');
		}else{
			$config['upload_path'] = 'bower_components/uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = 1000000;
			$config['max_width']  = 10240;
			$config['max_height']  = 7680;
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('userfile')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('form_produk',$error);
			}
			else{
				//$data = array('upload_data' => $this->upload->data());

				$upload = $this->upload->data();
				$confi['image_library']='gd2';
				$confi['source_image']=$upload['full_path'];
				$confi['maintain_ratio']=TRUE;
				$confi['height']=300;
				$confi['width']=600;

				$this->load->library('image_lib',$config);
				$this->image_lib->clear();
				$this->image_lib->initialize($confi);
				$this->image_lib->resize();
			
			$this->produk_model->insertProduk();
			$this->load->view('component/header',$cek);
			redirect('produk','refresh');
			$this->load->view('component/footer');
			}
		}
	}

	public function update($id){
		$this->form_validation->set_rules('nama_produk','nama_produk','trim|required');
		$this->form_validation->set_rules('stok','stok','trim|required');
		$this->form_validation->set_rules('harga_jual','harga','trim|required');
		$this->form_validation->set_rules('harga_beli','harga','trim|required');
		$this->form_validation->set_rules('id_kategori','id_kategori','trim|required');
		$this->form_validation->set_rules('deskripsi','deskripsi','trim|required');
		

		$data['pro']=$this->produk_model->getProduk($id);
		$data['kategori']=$this->kategori_model->getDataKategori();
		$filename='gambar';

		if($this->form_validation->run()==FALSE){
			// $data['pro']=$this->produk_model->getDataProduk();
			// $data['kategori']=$this->kategori_model->getDataKategori();

		    	$cek['status'] = array(
        		'home'=>'',
        		'hrd'=>'',
        		'keuangan'=>'',
        		'produk'=>'active',
        		'pembelian'=>'',
        		'pemasukan'=>'',
        		'pengeluaran'=>'',
        		'utang'=>'',
        		'pemesanan'=>'',
                'pembayaran'=>'',
        		'cash_flow'=>'',
        		'neraca'=>'',
        		'admin'=>'',
        		'gaji'=>'',
        		'golongan'=>'',
        		'absensi'=>'',
        		'user'=>'',
        		'barang'=>'active',
        		'supplier'=>'',
        		'kategori'=>'',
        		);
			$this->load->view('component/header',$cek);
			$this->load->view('edit_produk',$data);
			$this->load->view('component/footer');
		}else{
			$config['upload_path'] = 'bower_components/uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = 100000;
			$config['max_width']  = 10240;
			$config['max_height']  = 7680;
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload()){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('edit_produk',$error);
				
			}
			else{
				$image_data=$this->upload->data();

				$configer=array(
					'image_library' =>'gd2',
					'source_image' => $image_data['full_path'],
					'maintain_ratio'=>TRUE,
					'width'=> 300,
					'height'=>600,

					);
				$this->load->library('image_lib',$config);
				$this->image_lib->clear();
				$this->image_lib->initialize($configer);
				$this->image_lib->resize();

			$this->produk_model->UpdateById($id);
			redirect('produk','refresh');
		}
	}
	}

	public function delete($id){
		$this->produk_model->delete($id);
		redirect('produk','refresh');
	}

}

/* End of file gaji.php */
/* Location: ./application/controllers/gaji.php */
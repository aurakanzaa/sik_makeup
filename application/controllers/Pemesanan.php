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
        $this->load->model('kategori_model');
        $this->load->model('Model_login');
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
        		'utang'=>'',
                'pemesanan'=>'active',
        		'cash_flow'=>'',
        		'neraca'=>'',
        		'admin'=>'',
        		'gaji'=>'',
        		'golongan'=>'',
                'pembayaran'=>'',
        		'absensi'=>'',
        		'user'=>'',
        		'barang'=>'',
        		'supplier'=>'',
        		'kategori'=>'',
        		);
		$this->load->view('component/header',$cek);
		$this->load->view('pemesanan/pemesanan',$object);
		$this->load->view('component/footer');	
	}
    public function dataPemesananUser($id)
    {
        if ($this->session->userdata('userSession')!=null)
            {
                $object['dataPesanan']=$this->pemesanan_model->getStatusPemesanan($this->session->userdata('userSession')['id']);
           
            }
        else
            {
                $object['dataPesanan']=0;
            }
        $object['pemesanan']=$this->pemesanan_model->getPemesananId($id);
        $object['produk']=$this->produk_model->getProduk($id);
        $object['user']=$this->user_model->getDataUser();
        $object['kategori'] = $this->kategori_model->getDataKategori();

        $this->load->view('component/header_main',$object);
        $this->load->view('pemesanan/dataPemesananUser',$object);
        $this->load->view('component/footer'); 
    }


	public function order($id)
	{
        if ($this->session->userdata('userSession')!=null)
            {
                $object['dataPesanan']=$this->pemesanan_model->getStatusPemesanan($this->session->userdata('userSession')['id']);
           
            }
        else
            {
                $object['dataPesanan']=0;
            }
		$object['produk']=$this->produk_model->getProduk($id);
        $object['pro']=$this->produk_model->getDataProduk();
        $object['user']=$this->user_model->getDataUser();
        $object['kategori'] = $this->kategori_model->getDataKategori();

		$this->load->view('component/header_main',$object);
        $this->load->view('pemesanan/order',$object);
        $this->load->view('component/footer');  
	}

	public function create($id){
		$this->form_validation->set_rules('qty','Jumlah','trim|required');
		if($this->form_validation->run()==FALSE){

               redirect("pemesanan/order/$id");
		}else{
			
		      $this->pemesanan_model->insertPemesanan($id);
              $this->produk_model->updateStok($id, $this->input->post('qty'));
              redirect('Pemesanan/dataPemesananUser/'.$this->session->userdata('userSession')['id'],'refresh');
		     
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
        		      'utang'=>'',
                      'pemesanan'=>'active',
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
    public function deletes($id)
    {
        $this->pemesanan_model->delete($id);
        redirect('pemesanan/dataPemesananUser/'.$this->session->userdata('userSession')['id'],'refresh');
    }

}

/* End of file Pembelian.php */
/* Location: ./application/controllers/Pembelian.php */
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
        $this->load->model('pembayaran_model');
        $this->load->model('pemesanan_model');
        $this->load->model('kategori_model');
        $this->load->model('Model_login');
        $this->load->model('produk_model');
		$this->load->helper('html');
		$this->load->library('image_lib');
	}

	public function index()
	{	
	}

    public function detail($id)
    {
        $where = array(
            'username' => 'admin',
            'password' => md5('admin')
            );
        if ($this->session->userdata('userSession')!=null)
            {
                $cek['dataPesanan']=$this->pemesanan_model->getStatusPemesanan($this->session->userdata('userSession')['id']);
           
            }
        else
            {
                $cek['dataPesanan']=0;
            }
        $cek['kategori'] = $this->kategori_model->getDataKategori();
        $cek['dat'] = $this->Model_login->cek_login("admin",$where);
        $cek['produk'] = $this->produk_model->getDataProduk();
        $cek['struk'] = $this->pembayaran_model->getPembayaranId($id);
        $cek['status'] = array(
                'home'=>'active',
                'hrd'=>'',
                'keuangan'=>'',
                'produk'=>'',
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
                'barang'=>'',
                'supplier'=>'',
                'kategori'=>'',
                );

        $this->load->view('component/header_main',$cek);
        $this->load->view('struk/struk_view',$cek);
        $this->load->view('component/footer');
    }

	public function form_struk()
	{
		 $object['user']=$this->user_model->getDataUser();
        $object['struk']=$this->struk_model->getDataStruk();
        $object['bayar']=$this->pembayaran_model->getDataPembayaran();
        $object['pesan']=$this->pemesanan_model->getDataPemesanan();
        $object['totalstruk']=$this->struk_model->getDataTotalStruk();

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

        $object['user']=$this->user_model->getDataUser();
        $object['struk']=$this->struk_model->getDataStruk();
        $object['bayar']=$this->pembayaran_model->getDataPembayaran();
        $object['pesan']=$this->pemesanan_model->getDataPemesanan();
        $object['totalstruk']=$this->struk_model->getDataTotalStruk();

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
        
        $object['user']=$this->user_model->getDataUser();
        $object['struk']=$this->struk_model->getStruk($id);
        $object['bayar']=$this->pembayaran_model->getDataPembayaran();
        $object['pesan']=$this->pemesanan_model->getDataPemesanan();
        $object['totalstruk']=$this->struk_model->getDataTotalStruk();

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
		
		if($this->form_validation->run()==FALSE){

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
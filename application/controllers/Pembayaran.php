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
        $this->load->model('produk_model');
        $this->load->model('user_model');
        $this->load->model('kategori_model');
	}

	public function index()
    {
        $object['pemasukan']=$this->pembayaran_model->getDataPembayaran();
        $cek['status'] = array(
                'home'=>'',
                'hrd'=>'',
                'keuangan'=>'active',
                'produk'=>'',
                'pembelian'=>'',
                'pemasukan'=>'',
                'pengeluaran'=>'',
                'pembayaran'=>'active',
                'pemesanan'=>'',
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
        $this->load->view('component/header',$cek);
        $this->load->view('Pemasukan/view_pembayaran',$object);
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
        		'utang'=>'',
                'pembayaran'=>'active',
                'pemesanan'=>'',
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

	public function create($id){
        $object['produk']=$this->pemesanan_model->getPemesanan($id);
		$this->form_validation->set_rules('kode_pembayaran','Kode Pembayaran','trim|required'); 
                $cek['status'] = array(
                        'home'=>'',
                        'hrd'=>'',
                        'keuangan'=>'active',
                        'produk'=>'',
                        'pembelian'=>'',
                        'pemasukan'=>'',
                        'pengeluaran'=>'',
                        'utang'=>'',
                        'pembayaran'=>'active',
                        'pemesanan'=>'',
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

		if($this->form_validation->run()==FALSE || $object['produk'][0]->kode_pembayaran !=$this->input->post('kode_pembayaran')){
              if ($this->session->userdata('userSession')!=null)
            {
                $object['dataPesanan']=$this->pemesanan_model->getStatusPemesanan($this->session->userdata('userSession')['id']);
           
            }
        else
            {
                $object['dataPesanan']=0;
            }
              $object['user']=$this->user_model->getDataUser();
              $object['kategori'] = $this->kategori_model->getDataKategori();
		      $this->load->view('component/header_main',$object);
		      $this->load->view('pemasukan/form_pembayaran',$object);
		      $this->load->view('component/footer');
		}else{
		      $this->pembayaran_model->insertPembayaran($id, $object['produk'][0]->total_pemesanan);
               $this->pemesanan_model->updateStatusPemesanan($id);
               redirect('struk/detail/'.$id,'refresh');

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
        		      'utang'=>'',
                      'pembayaran'=>'active',
        		      'cash_flow'=>'',
        		      'neraca'=>'',
                      'pemesanan'=>'',
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
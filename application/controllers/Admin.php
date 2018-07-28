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
    public function Karyawan($id,$id2)
    {
        $object['admin']=$this->admin_model->getAdminGol($id,$id2);
        $object['role']=$this->role_model->getDataRole();
        $object['gol']=$this->golongan_model->getDataGolongan();


        $cek['status'] = array(
                'home'=>'',
                'hrd'=>'active',
                'keuangan'=>'active',
                'produk'=>'active',
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
            $config['upload_path'] = 'assets/img/admin/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']  = 1000000;
            $config['max_width']  = 10240;
            $config['max_height']  = 7680;
            
            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('userfile')){
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('form_admin',$error);
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
			
		    $this->admin_model->insertAdmin();
            $this->load->view('component/header',$cek);
            redirect('home','refresh');
            $this->load->view('component/footer');
        }
		     
		}
	}

	public function update($id){
		$this->form_validation->set_rules('id_role','id_role','trim|required');
        $this->form_validation->set_rules('id_golongan','id golongan','trim|required');
        $this->form_validation->set_rules('username','username','trim|required');
        // $this->form_validation->set_rules('password','password','trim|required');

        $object['admin']=$this->admin_model->getAdmin($id);
        $object['role']=$this->role_model->getDataRole();
        $object['gol']=$this->golongan_model->getDataGolongan();
        $filename='foto';

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
            

			$this->load->view('component/header',$cek);
			$this->load->view('edit_admin',$object);
			$this->load->view('component/footer');
		}else{
			
			$config['upload_path'] = 'assets/img/admin/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']  = 100000;
            $config['max_width']  = 10240;
            $config['max_height']  = 7680;
            
            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload()){
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('edit_admin',$error);
                
            }
            else{
                $image_data=$this->upload->data();

                $configer=array(
                    'image_library' =>'gd2',
                    'source_image' => $image_data['full_path'],
                    'maintain_ratio'=>TRUE,
                    'width'=> 300,
                    'height'=>300,

                    );
                $this->load->library('image_lib',$config);
                $this->image_lib->clear();
                $this->image_lib->initialize($configer);
                $this->image_lib->resize();

            $this->admin_model->UpdateById($id);
            redirect('admin','refresh');
        }
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
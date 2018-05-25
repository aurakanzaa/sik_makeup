<?php
 
class Login extends CI_Controller{
 
    function __construct(){
        parent::__construct();     
        $this->load->model('Model_login');
 
    }
 
    function index(){
        $this->load->view('View_login');
    }
 
    function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
            );
        $cek = $this->Model_login->cek_login("admin",$where)->num_rows();
        if($cek > 0){
 
            $data_session = array(
                'nama' => $username,
                'status' => "login"
                );
 
            $this->session->set_userdata('userSession',$data_session);
 
            redirect(base_url("index.php/Home"));
 
        }else{
             $this->session->set_flashdata('failedLogin', 'Password/Username Salah');
            redirect('login');
        }
    }
 
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('index.php/Login'));
    }
}
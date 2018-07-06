<?php
 
class Login extends CI_Controller{
 
    function __construct(){
        parent::__construct();     
        $this->load->model('Model_login');
        $this->load->model('User_model');
        $this->load->helper('url','form');
        $this->load->library('form_validation');
        $this->load->helper('html');
        $this->load->library('image_lib');
 
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
        $cek = $this->Model_login->cek_login("admin",$where);
        if($cek){
            $data_session = array(
                'nama' => $cek[0]->username,
                'status' => "login",
                'id' => $cek[0]->id,
                'foto' => $cek[0]->foto
                );
 
            $this->session->set_userdata('userSession',$data_session);
 
            redirect(base_url("index.php/Home"));
 
        }

        else{
             $this->session->set_flashdata('failedLogin', 'Password/Username Salah');
            redirect('login');
        }
    }
 
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('index.php/Login'));
    }

    public function register()
    {   
        $this->form_validation->set_rules('nama','nama','trim|required');
        $this->form_validation->set_rules('alamat','alamat','trim|required');
        $this->form_validation->set_rules('email','email');
        $this->form_validation->set_rules('jenis_kelamin','jenis_kelamin');
        $this->form_validation->set_rules('no_telp','no_telp','trim|required');
        $this->form_validation->set_rules('username','username','trim|required');
        $this->form_validation->set_rules('password','password','trim|required');
        

        if($this->form_validation->run()==FALSE){
            $this->load->view('register');
        }else{
            $this->User_model->register();
            redirect('login');
        }
        
    }

    public function loginUser()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
            );
        $cek = $this->Model_login->cek_login("user",$where);
        if($cek){
            $data_session = array(
                'nama' => $cek[0]->username,
                'id' => $cek[0]->id,
                );
 
            $this->session->set_userdata('userSession',$data_session);
 
            redirect("Homes");
        }
        else
        {
             $this->load->view('login/LoginUser');
        }
    }
}
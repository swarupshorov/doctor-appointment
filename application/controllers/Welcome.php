<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->library('Dbaction');
        $this->load->library('session');
        $this->load->model('WelcomeModel');
        $this->load->model('LoginModel');

        //========== load model ===============//
    }

	public function index()
	{
		$this->load->view('user/header');
		$this->load->view('user/main-body');
		$this->load->view('user/footer');
	}
	public function register(){
        $data['user'] = array('name'=>'','user_name'=>'','cell_no'=>'','email'=>'','password'=>'');
        $this->load->view('user/header');
        $this->load->view('user/register',$data);
        $this->load->view('user/footer');
    }
    public function saveData(){
        $data['user']= array(
            'name'=>$this->input->post('name'),
            'user_name'=>$this->input->post('user_name'),
            'cell_no'=>$this->input->post('cell_no'),
            'email'=>$this->input->post('email'),
            'password'=>$this->input->post('password'),
            'type'=>1
        );
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('user_name', 'User Name', 'required');
        $this->form_validation->set_rules('cell_no', 'Cell no', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run() == FALSE){
            $this->load->view('user/header');
            $this->load->view('user/register',$data);
            $this->load->view('user/footer');
        }else{
            $status = $this->WelcomeModel->SaveData($data['user']);
        }
    }
    public function login(){
        $this->load->view('user/header');
        $this->load->view('user/login');
        $this->load->view('user/footer');
    }
    public function CheckLogin(){
        $name = $this->security->xss_clean($this->input->post('name'));
        $password = $this->security->xss_clean($this->input->post('login-password'));
        $type = 1;
        $result = $this->LoginModel->validate($name,$password,$type);
    }
    public function fetch(){
        $query = $this->input->post('query');
        if($query = !''){
            $this->WelcomeMoel->fetch_data($query);
        }

    }
}

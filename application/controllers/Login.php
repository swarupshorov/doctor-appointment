<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("LoginModel"); 
        $this->load->library('session');     

    }
    public function index(){
    	$this->load->view('login');
    }
    public function check_login(){
    	$email = $this->security->xss_clean($this->input->post('login-email'));

        $password = $this->security->xss_clean($this->input->post('login-password'));
        $type = $this->security->xss_clean($this->input->post('type'));
        $result = $this->LoginModel->validate($email,$password,$type);

        if(!$result){
            $this->session->set_flashdata('error', 'Invalid Username/Password.');
            $this->index();
        }else{
            // If user did validate,
            // Send them to members area
            
            if($_SESSION['type']==3){
                redirect('Deshboard');
            }elseif ($_SESSION['type']==2) {
                redirect('Doctor/view');
            }
        }

    }
    public function regsiter_doc(){
    	$this->load->view("header");
    	$this->load->view("left-bar");
    	$this->load->view("doc/doctor_form");
    	$this->load->view("footer");

    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}
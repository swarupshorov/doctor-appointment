<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Doctor extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
        $this->load->model('DoctorModel');
        $this->load->library('Dbaction');
        $this->load->library('session'); 

    }
    public function index(){
        $data = array();
        $data["doctor"]= $this->dbaction->viewDataWithWhere('user','type',2,'id','DESC');
    	$this->load->view("header");
        $this->load->view("left-bar");
        $this->load->view("doc/doctor_list",$data);
        $this->load->view("footer");
    }
    
    public function regsiter_doc(){
        $data = array('user_name'=>'','email'=>'');  

    	$this->load->view("header");
    	$this->load->view("left-bar");
    	$this->load->view("doc/doctor_form",$data);
    	$this->load->view("footer");

    }
    public function saveDoctor(){
        
        $data = array(
            'user_name'=>$this->input->post('user_name'),
            'password'=>$this->input->post('password'),
            'email'=>$this->input->post('email'),
            'type'    =>2,
        );        
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('user_name', 'User Name', 'required');
        $this->form_validation->set_rules('email', 'User Email', 'required');
       
        if($this->form_validation->run() == FALSE){          
            $this->load->view("header");
            $this->load->view("left-bar");
            $this->load->view("doc/doctor_form",$data);
            $this->load->view("footer");
        }else{
            $result = $this->DoctorModel->SaveData($data);
            if($result){                
                $this->session->set_flashdata('success', 'Save Doctor.');            
                redirect('Doctor');
            }else{
                $this->load->view("header");
                $this->load->view("left-bar");
                $this->load->view("doc/doctor_form",$data);
                $this->load->view("footer");
            }
        }
    }
    public function edit($id){
        $data = array();
        $doctor_list = $this->dbaction->selectdata('user','id',$id);
        $data['doctor'] = $doctor_list[0];

        $this->load->view("header");
        $this->load->view("left-bar");
        $this->load->view("doc/doctor_edit_form",$data);
        $this->load->view("footer");
    }
    public function SaveEditData(){
        $id=$this->input->post('id');
        $data = array(
            'id'=>$id,
            'user_name'=>$this->input->post('user_name'),
            'password'=>$this->input->post('password'),
            'email'=>$this->input->post('email')
           
        );
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('user_name', 'User Name', 'required');
        $this->form_validation->set_rules('email', 'User Email', 'required');
        if($this->form_validation->run() == FALSE){        
            $this->load->view("header");
            $this->load->view("left-bar");
            $this->load->view("doc/doctor_edit_form",$data);
            $this->load->view("footer");
        }else{
            //var_dump($data);exit();
            $this->dbaction->update('user',$data,'id',$id);
            $this->session->set_flashdata('success', 'Update Doctor.');
            redirect('Doctor');
        }

    }
    public function delete($id){
        $status = $this->DoctorModel->DeleteData($id);
        if($status){
            $this->session->set_flashdata('error', 'Delete Successfully.');
            redirect('Doctor');
        }else{
            $this->session->set_flashdata('error', 'Failed To Delete.');
            redirect('Doctor');
        }
    }
    public function view(){

        $this->load->view("header");
        $this->load->view("left-bar");
        $this->load->view("doc/doctor_deshboard");
        $this->load->view("footer");
    }
    public function AddInformation(){
        $data['allData'] = array('name'=>'','cell_no'=>'','address'=>'','date_of_birth','special_id'=>'');
        $data['specility_list'] =array(0=>"Select Specility")+$this->dbaction->getlist('specialist','id','name');
        $this->load->view("header");
        $this->load->view("left-bar");
        $this->load->view("doc/doctor_incormation_add",$data);
        $this->load->view("footer");
    }
    public function saveInformation(){
        $data = array(
            "name"=>$this->input->post('name'),
            "cell_no"=>$this->input->post('cell_no'),
            "address"=>$this->input->post('address'),
            "date_of_birth"=>$this->input->post('date_of_birth'),
            "special_id"=>$this->input->post('special_id'),            
        );
    }
}
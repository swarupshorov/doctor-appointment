<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Specility extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
        
        $this->load->library('Dbaction');
       

    }
    public function index(){
        $data = array();
         $data["specility"]= $this->dbaction->viewdata('specialist','id','DESC');
    	$this->load->view("header");
        $this->load->view("left-bar");
        $this->load->view("doc/specility_list",$data);
        $this->load->view("footer");
    }
    
    public function specility_add(){
        $data = array('name'=>'');  

    	$this->load->view("header");
    	$this->load->view("left-bar");
    	$this->load->view("doc/specility_form",$data);
    	$this->load->view("footer");

    }
    public function saveSpecility(){
        $data = array(
            "name"=>$this->input->post('name')
        );
        $this->form_validation->set_rules('name', 'Name', 'required');
        if($this->form_validation->run() == FALSE){  
            $this->load->view("header");
            $this->load->view("left-bar");
            $this->load->view("doc/specility_form",$data);
            $this->load->view("footer");
        }else{
            $this->dbaction->insert('specialist',$data);
            $this->session->set_flashdata('success', 'Save Specility.');
            redirect('Specility');
        }
    }
    public function edit($id){
        $data = array();
        $specialist_list = $this->dbaction->selectdata('specialist','id',$id);
        $data['specility'] = $specialist_list[0];

        $this->load->view("header");
        $this->load->view("left-bar");
        $this->load->view("doc/specility_edit_form",$data);
        $this->load->view("footer");
    }
    public function SaveEditData(){
        $id=$this->input->post('id');
        $data = array(
            'id'=>$id,
            'name'=>$this->input->post('name'),            
        );
         $this->form_validation->set_rules('name', 'Name', 'required');
        if($this->form_validation->run() == FALSE){  
            $this->load->view("header");
            $this->load->view("left-bar");
            $this->load->view("doc/specility_edit_form",$data);
            $this->load->view("footer");
        }else{
            $this->dbaction->update('specialist',$data,'id',$id);
            $this->session->set_flashdata('success', 'Update Specility.');
            redirect('Specility');
        }
    }
    
    public function delete($id=''){
        if($this->dbaction->delete('specialist','id',$id)){
            $this->session->set_flashdata('error', 'Delete Successfully.');
            redirect('Specility');
        }
    }
}
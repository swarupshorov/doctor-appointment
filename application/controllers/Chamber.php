<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Chamber extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
        
        $this->load->library('Dbaction');
       

    }
    public function index(){
        $data = array();
         $data["chamber"]= $this->dbaction->viewdata('chamber','id','DESC');
    	$this->load->view("header");
        $this->load->view("left-bar");
        $this->load->view("doc/chamber_list",$data);
        $this->load->view("footer");
    }
    
    public function chamber_add(){
        $data = array('place'=>'','in_time'=>'','out_time'=>'','user_id'=>'');  

    	$this->load->view("header");
    	$this->load->view("left-bar");
    	$this->load->view("doc/chamber_form",$data);
    	$this->load->view("footer");

    }
    public function saveChamber(){
        $data = array(
            "name"=>$this->input->post('name')
        );
        $this->form_validation->set_rules('name', 'Name', 'required');
        if($this->form_validation->run() == FALSE){  
            $this->load->view("header");
            $this->load->view("left-bar");
            $this->load->view("doc/chamber_form",$data);
            $this->load->view("footer");
        }else{
            $this->dbaction->insert('chamber',$data);
            $this->session->set_flashdata('success', 'Save Specility.');
            redirect('Specility');
        }
    }
    public function edit($id){
        $data = array();
        $chamber_list = $this->dbaction->selectdata('chamber','id',$id);
        $data['specility'] = $chamber_list[0];

        $this->load->view("header");
        $this->load->view("left-bar");
        $this->load->view("doc/chamber_edit_form",$data);
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
            $this->load->view("doc/chamber_edit_form",$data);
            $this->load->view("footer");
        }else{
            $this->dbaction->update('chamber',$data,'id',$id);
            $this->session->set_flashdata('success', 'Update Chamber.');
            redirect('Chamber');
        }
    }
    
    public function delete($id=''){
        if($this->dbaction->delete('chamber','id',$id)){
            $this->session->set_flashdata('error', 'Delete Successfully.');
            redirect('Chamber');
        }
    }
}
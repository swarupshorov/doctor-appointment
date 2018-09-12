<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Chamber extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('Dbaction');
        $this->load->model('ChamberModel');
    }
    public function index(){
        $data = array();
        $data["chamber"]= $this->ChamberModel->getAllChamberInfo('chamber','id','DESC');
    	$this->load->view("header");
        $this->load->view("left-bar");
        $this->load->view("doc/chamber_list",$data);
        $this->load->view("footer");
    }
    
    public function chamber_add(){
        $doc_list = array();
        $data['allData'] = array('place'=>'','in_time'=>'','out_time'=>'','user_id'=>'','phone'=>'','email'=>'');  
        $list = $this->ChamberModel->getDoctor();
        if( !empty($list)){
            foreach ($list as $key => $value) {
                $doc_list[$value['id']] = $value['name'];
            }
        }
        $data['doc_list']= $doc_list;
    	$this->load->view("header");
    	$this->load->view("left-bar");
    	$this->load->view("doc/chamber_form",$data);
    	$this->load->view("footer");

    }
    public function saveChamber(){
        $data = $data2=array();
        $list = $this->ChamberModel->getDoctor();
        if( !empty($list)){
            foreach ($list as $key => $value) {
                $doc_list[$value['id']] = $value['name'];
            }
        }
        $data['doc_list']= $doc_list;

        $in_time        =   $this->input->post('in_time');
        $out_time       =   $this->input->post('out_time');
        $new_in_time    = strtotime($in_time);
        $new_out_time   = strtotime($out_time );       
        
        $data['allData'] = array(
            "place"     =>$this->input->post('place'),
            "in_time"   =>date("H:i:s",$new_in_time),
            "out_time"  =>date("H:i:s",$new_out_time),
            "user_id"   =>$this->input->post('user_id'),
            "phone"   =>$this->input->post('phone'),
            "email"   =>$this->input->post('email'),
        );
        $this->form_validation->set_rules('place', 'Place', 'required');
        $this->form_validation->set_rules('in_time', 'In Time ', 'required');
        $this->form_validation->set_rules('out_time', 'out Time', 'required');
        $this->form_validation->set_rules('user_id', 'Doctor ', 'required');
        $this->form_validation->set_rules('phone', 'Contact No ', 'required');
        
        if($this->form_validation->run() == FALSE or ($new_in_time > $new_out_time)){
            
            $this->load->view("header");
            $this->load->view("left-bar");
            $this->load->view("doc/chamber_form",$data);
            $this->load->view("footer");
            $this->session->set_flashdata('outWarn', 'Out Time Cannot equal or less then intime.');
        }else{
            
            $this->dbaction->insert('Chamber',$data['allData']);
            $this->session->set_flashdata('success', 'Save Chamber.');
            redirect('Chamber');
        }
    }
    public function edit($id){
        $chamber_list = $this->dbaction->selectdata('chamber','id',$id);

        $data['allData'] = $chamber_list[0];

        $list = $this->ChamberModel->getDoctor();
        if( !empty($list)){
            foreach ($list as $key => $value) {
                $doc_list[$value['id']] = $value['name'];
            }
        }
        $data['doc_list']= $doc_list;

        $this->load->view("header");
        $this->load->view("left-bar");
        $this->load->view("doc/chamber_edit_form",$data);
        $this->load->view("footer");
    }
    public function SaveEditData(){
        $id=$this->input->post('id');
        $in_time        =   $this->input->post('in_time');
        $out_time       =   $this->input->post('out_time');
        $new_in_time    = strtotime($in_time);
        $new_out_time   = strtotime($out_time );
        $list = $this->ChamberModel->getDoctor();
        if( !empty($list)){
            foreach ($list as $key => $value) {
                $doc_list[$value['id']] = $value['name'];
            }
        }
        $data['doc_list']= $doc_list;
        $data['allData'] = (object) array(
            "id"        =>$id,
            "place"     =>$this->input->post('place'),
            "in_time"   =>date("H:i:s",$new_in_time),
            "out_time"  =>date("H:i:s",$new_out_time),
            "user_id"   =>$this->input->post('user_id'),
            "phone"     =>$this->input->post('phone'),
            "email"     =>$this->input->post('email'),
        );
        $this->form_validation->set_rules('place', 'Place', 'required');
        $this->form_validation->set_rules('in_time', 'In Time ', 'required');
        $this->form_validation->set_rules('out_time', 'out Time', 'required');
        $this->form_validation->set_rules('user_id', 'Doctor ', 'required');
        $this->form_validation->set_rules('phone', 'Contact No ', 'required');

        if($this->form_validation->run() == FALSE or ($new_in_time > $new_out_time)){
               
            $this->load->view("header");
            $this->load->view("left-bar");
            $this->load->view("doc/chamber_edit_form",$data);
            $this->load->view("footer");
        }else{
            unset($data['allData']->id);
            
            $this->dbaction->update('chamber',$data['allData'],'id',$id);
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
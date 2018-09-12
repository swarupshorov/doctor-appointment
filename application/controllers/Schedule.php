<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Schedule extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('Dbaction');
        $this->load->model('ScheduleModel');
    }
    public function index(){
        $data = array();
        $data["schedule"] = $this->ScheduleModel->getAllScheduleInfo();
        
    	$this->load->view("header");
        $this->load->view("left-bar");
        $this->load->view("doc/schedule_list",$data);
        $this->load->view("footer");
    }
    public function schedule_add(){
        $doc_list = array();
        $data['chamber_list'] =array(0=>"Select Chamber")+$this->dbaction->getlist('chamber','id','place');
        $data['allData'] = (object)array('date'=>'','patient_view'=>'','status'=>'','chamber_id'=>'');
        
        $this->load->view("header");
        $this->load->view("left-bar");
        $this->load->view("doc/schedule_form",$data);
        $this->load->view("footer");

    } 
    public function saveSchedule(){
        $data['chamber_list'] =array(0=>"Select Chamber")+$this->dbaction->getlist('chamber','id','place');
        $data['allData'] = (object)array(
            'chamber_id' =>$this->input->post('chamber_id'),
            'date' =>$this->input->post('date'),
            'patient_view' =>$this->input->post('patient_view'),
        );
        $this->form_validation->set_rules('chamber_id', 'Chamber', 'required');
        $this->form_validation->set_rules('date', 'Chamber', 'required');
        $this->form_validation->set_rules('patient_view', 'Chamber', 'required');
        if($this->form_validation->run() == FALSE ){
            $this->load->view("header");
            $this->load->view("left-bar");
            $this->load->view("doc/schedule_form",$data);
            $this->load->view("footer");
        }else{            
            $this->dbaction->insert('schedule',$data['allData']);
            $this->session->set_flashdata('success', 'Save Chamber.');
            redirect('Schedule');
        }

    }
    public function edit($id){
        $shedule_list = $this->dbaction->selectdata('schedule','id',$id);
        $data['schedule'] = $shedule_list[0];

        $data['chamber_list'] =array(0=>"Select Chamber")+$this->dbaction->getlist('chamber','id','place');
        $this->load->view("header");
        $this->load->view("left-bar");
        $this->load->view("doc/schedule_edit_form",$data);
        $this->load->view("footer");
    }
    public function SaveEditData(){
        $id = $this->input->post('id');
        $data['chamber_list'] =array(0=>"Select Chamber")+$this->dbaction->getlist('chamber','id','place');
        $data['allData'] = (object)array(
            'chamber_id' =>$this->input->post('chamber_id'),
            'date' =>$this->input->post('date'),
            'patient_view' =>$this->input->post('patient_view'),
        );
        $this->form_validation->set_rules('chamber_id', 'Chamber', 'required');
        $this->form_validation->set_rules('date', 'Chamber', 'required');
        $this->form_validation->set_rules('patient_view', 'Chamber', 'required');
        if($this->form_validation->run() == FALSE ){
            $this->load->view("header");
            $this->load->view("left-bar");
            $this->load->view("doc/schedule_edit_form",$data);
            $this->load->view("footer");
        }else{
            $this->dbaction->update('schedule',$data['allData'],'id',$id);
            $this->session->set_flashdata('success', 'Update Schedule.');
            redirect('Schedule');
        }
    }
    public function delete($id=''){
        if($this->dbaction->delete('schedule','id',$id)){
            $this->session->set_flashdata('error', 'Delete Successfully.');
            redirect('Schedule');
        }
    }
}
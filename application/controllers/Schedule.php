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
        $data["schedule"]= $this->ScheduleModel->getAllChamberInfo('chamber','id','DESC');
    	$this->load->view("header");
        $this->load->view("left-bar");
        $this->load->view("doc/chamber_list",$data);
        $this->load->view("footer");
    }
    public function schedule_add(){
        $doc_list = array();
        $data['allData'] = array('date'=>'','patient_view'=>'','status'=>'','chamber_id'=>'','date'=>'');  
        
        $this->load->view("header");
        $this->load->view("left-bar");
        $this->load->view("doc/schedule_form",$data);
        $this->load->view("footer");

    } 
}
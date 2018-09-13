<?php
/**
 * Created by PhpStorm.
 * User: Swarup Mohan
 * Date: 9/13/2018
 * Time: 12:45 AM
 */

class Appointment extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        auth_check();
        $this->load->library('Dbaction');
        $this->load->library('session');
        $this->load->model('AppointmentModel');

        //========== load model ===============//
    }
    public function index(){
        $data = array();
        $data['appointmet'] = $this->AppointmentModel->getAllAppointment();
        $this->load->view("header");
        $this->load->view("left-bar");
        $this->load->view('doc/appointment_list',$data);
        $this->load->view("footer");
    }
    public function create(){
        $data = array();
        $user = '';
        $data['city_list'] =array(0=>"Select City")+$this->dbaction->getlist('city','id','name');
        $data['allData'] = array('doctor_id'=>'','city_id'=>'','patient_id'=>'','chamber_id'=>'','date'=>'');
        $data['chamber_list'] =array(0=>"Select Chamber")+$this->dbaction->getlist('chamber','id','place');
        $list     = $this->AppointmentModel->getDoctor();
        if( !empty($list)){
            foreach ($list as $key => $value) {
                $doc_list[$value['id']] = $value['name'];
            }
        }
        $data['doc_list']= $doc_list;
        $list2     = $this->AppointmentModel->getUser();
        if( !empty($list2)){
            foreach ($list2 as $key => $value) {
                $user[$value['id']] = $value['name'];
            }
        }
        $data['user_list']= $user;
        $this->load->view("header");
        $this->load->view("left-bar");
        $this->load->view('doc/appointment_form',$data);
        $this->load->view("footer");
    }
    public  function saveAppointment(){
        $user ='';
        $data['city_list'] =array(0=>"Select City")+$this->dbaction->getlist('city','id','name');
        $data['allData'] = array('doctor_id'=>'','city_id'=>'','patient_id'=>'','chamber_id'=>'','date'=>'');
        $data['chamber_list'] =array(0=>"Select Chamber")+$this->dbaction->getlist('chamber','id','place');
        $list     = $this->AppointmentModel->getDoctor();
        if( !empty($list)){
            foreach ($list as $key => $value) {
                $doc_list[$value['id']] = $value['name'];
            }
        }
        $data['doc_list']= $doc_list;
        $list2     = $this->AppointmentModel->getUser();
        if( !empty($list2)){
            foreach ($list2 as $key => $value) {
                $user[$value['id']] = $value['name'];
            }
        }
        $data['user_list']= $user;
        $data['allData'] = array(
            'doctor_id' => $this->input->post('doctor_id'),
            'city_id' => $this->input->post('city_id'),
            'chamber_id' => $this->input->post('chamber_id'),
            'patient_id' => $this->input->post('patient_id'),
            'date' => $this->input->post('date'),
        );
        //echo "<pre>";print_r($data['allData'] );exit;
        $this->form_validation->set_rules('city_id', 'City Name', 'required');
        if($this->form_validation->run() == FALSE){
            $this->load->view("header");
            $this->load->view("left-bar");
            $this->load->view('doc/appointment_form',$data);
            $this->load->view("footer");
        }else{
            $this->dbaction->insert('appointment',$data['allData']);
            $this->session->set_flashdata('success', 'Save Appointment.');
            redirect('Appointment');
        }

    }
    public function getChamberList(){
        $chamber_list ='';
        $id = $this->input->post('id');
        $data  = $this->AppointmentModel->Chamber($id);
        foreach ($data as $value){
            $chamber_list[$value->place] = $value->place;
        }
        echo '<label class="control-label" for="form-field-1">Chamber : <i class="icon-asterisk" style="color: #d14747"></i></label>
            <div class="controls">            
                '.form_dropdown("chamber_id",$chamber_list," ",array("class"=>"","id"=>"chamber-id")).'</div>';
        exit();
    }
    public function getDoctorList(){
        $doctor_list ='';
        $place = $this->input->post('id');
        $data  = $this->AppointmentModel->Doctor($place);        
        if($data !=''){
            foreach ($data as $value){
                $doctor_list[$value->doc_id] = $value->doc_name;
            }
            echo '<label class="control-label" for="form-field-1">Doctor : <i class="icon-asterisk" style="color: #d14747"></i></label>
                <div class="controls">            
                    '.form_dropdown("doctor_id",$doctor_list," ",array("class"=>"","id"=>"doctro-id")).'</div>';
            exit();
        }
        
    }
    public function edit($id){
        $data = array();
        $user = '';
        $city_list = $this->dbaction->selectdata('appointment','id',$id);
        $data['appointment'] = $city_list[0];

        $data['city_list'] =array(0=>"Select City")+$this->dbaction->getlist('city','id','name');
        $data['allData'] = array('doctor_id'=>'','city_id'=>'','patient_id'=>'','chamber_id'=>'','date'=>'');
        $data['chamber_list'] =array(0=>"Select Chamber")+$this->dbaction->getlist('chamber','id','place');
        $list     = $this->AppointmentModel->getDoctor();
        if( !empty($list)){
            foreach ($list as $key => $value) {
                $doc_list[$value['id']] = $value['name'];
            }
        }
        $data['doc_list']= $doc_list;
        $list2     = $this->AppointmentModel->getUser();
        if( !empty($list2)){
            foreach ($list2 as $key => $value) {
                $user[$value['id']] = $value['name'];
            }
        }
        $data['user_list']= $user;

        $this->load->view("header");
        $this->load->view("left-bar");
        $this->load->view('doc/appointment_edit_form',$data);
        $this->load->view("footer");
    }
    public function SaveEditData(){
        $id = $this->input->post('id');
        $data['appointment'] = $city_list[0];

        $data['city_list'] =array(0=>"Select City")+$this->dbaction->getlist('city','id','name');
        $data['allData'] = array('doctor_id'=>'','city_id'=>'','patient_id'=>'','chamber_id'=>'','date'=>'');
        $data['chamber_list'] =array(0=>"Select Chamber")+$this->dbaction->getlist('chamber','id','place');
        $list     = $this->AppointmentModel->getDoctor();
        if( !empty($list)){
            foreach ($list as $key => $value) {
                $doc_list[$value['id']] = $value['name'];
            }
        }
        $data['doc_list']= $doc_list;
        $list2     = $this->AppointmentModel->getUser();
        if( !empty($list2)){
            foreach ($list2 as $key => $value) {
                $user[$value['id']] = $value['name'];
            }
        }
        $data['user_list']= $user;
        $data['allData'] = array(
            'doctor_id' => $this->input->post('doctor_id'),
            'city_id' => $this->input->post('city_id'),
            'chamber_id' => $this->input->post('chamber_id'),
            'patient_id' => $this->input->post('patient_id'),
            'date' => $this->input->post('date'),
        );
        $this->form_validation->set_rules('city_id', 'City Name', 'required');
        if($this->form_validation->run() == FALSE){
            $this->load->view("header");
            $this->load->view("left-bar");
            $this->load->view('doc/appointment_edit_form',$data);
            $this->load->view("footer");
        }else{
            $this->dbaction->update('appointment',$data['allData'],'id',$id);
            $this->session->set_flashdata('success', 'Update Appointment.');
            redirect('Appointment');
        }
    }
    public function delete($id=''){
        if($this->dbaction->delete('appointment','id',$id)){
            $this->session->set_flashdata('error', 'Delete Successfully.');
            redirect('Appointment');
        }
    }

}
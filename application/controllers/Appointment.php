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

        $this->load->library('Dbaction');
        $this->load->model('AppointmentModel');

        //========== load model ===============//
    }
    public function index(){
        $data = array();
        //$data["appointmet"]= $this->AppointmentModel->viewAllData('city',"id","DESC");
        $this->load->view("header");
        $this->load->view("left-bar");
        $this->load->view('doc/appointment_list',$data);
        $this->load->view("footer");
    }
    public function create(){
        $data = array();
        //$data['chamber_list'] =array(0=>"Select Chamber")+$this->dbaction->getlist('chamber','id','place');
        $data['allData'] = array('doctor_id'=>'','patient_id'=>'','chamber_id'=>'','date'=>'');
        $data['chamber_list'] =array(0=>"Select Chamber")+$this->dbaction->getlist('chamber','id','place');
        $list     = $this->AppointmentModel->getDoctor();
        if( !empty($list)){
            foreach ($list as $key => $value) {
                $doc_list[$value['id']] = $value['name'];
            }
        }
        $data['doc_list']= $doc_list;
        $list2     = $this->AppointmentModel->getDoctor();
        if( !empty($list2)){
            foreach ($list2 as $key => $value) {
                $user_list[$value['id']] = $value['name'];
            }
        }
        $data['user_list']= $user_list;
        $this->load->view("header");
        $this->load->view("left-bar");
        $this->load->view('doc/appointment_form',$data);
        $this->load->view("footer");
    }
    public  function saveAppointment(){
        $data['chamber_list'] =array(0=>"Select Chamber")+$this->dbaction->getlist('chamber','id','place');

    }
    public function getDocList(){
        $id = $this->input->post('id');
        $this->AppointmentModel->Doctor($id);

    }

}
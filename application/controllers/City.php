<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Swarup Mohan
 * Date: 9/12/2018
 * Time: 10:57 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class City extends CI_Controller{
    function __construct()
    {
        parent::__construct();

        $this->load->library('Dbaction');
        $this->load->library('session');

        //========== load model ===============//
    }
    public function index(){
        $data = array();
        $data["city"]= $this->dbaction->viewdata('city',"id","DESC");
        $this->load->view("header");
        $this->load->view("left-bar");
        $this->load->view('doc/city_list',$data);
        $this->load->view("footer");
    }
    public function create(){
        $data = array();
        $data['city'] = (object) array('name'=>'');
        $this->load->view("header");
        $this->load->view("left-bar");
        $this->load->view('doc/city_form',$data);
        $this->load->view("footer");
    }
    public function saveCity(){
        $data['city']= array(
            'name'=>$this->input->post('name')
        );
        $this->form_validation->set_rules('name', 'Name', 'required');
        if($this->form_validation->run() == FALSE){
            $this->load->view("header");
            $this->load->view("left-bar");
            $this->load->view('doc/city_form',$data);
            $this->load->view("footer");
        }else{
            $this->dbaction->insert('city',$data['city']);
            $this->session->set_flashdata('success', 'Save City.');
            redirect('City');
        }

    }
    public function edit($id = ''){
        $data = array();
        $city_list = $this->dbaction->selectdata('city','id',$id);
        $data['city'] = $city_list[0];
        $this->load->view("header");
        $this->load->view("left-bar");
        $this->load->view('doc/city_edit_form',$data);
        $this->load->view("footer");

    }
    public function SaveEditData(){
        $id = $this->input->post('id');
        $data['city']= array(
            'name'=>$this->input->post('name')
        );
        $this->form_validation->set_rules('name', 'Name', 'required');
        if($this->form_validation->run() == FALSE){
            $this->load->view("header");
            $this->load->view("left-bar");
            $this->load->view('doc/city_edit_form',$data);
            $this->load->view("footer");
        }else{
            $this->dbaction->update('city',$data['city'],'id',$id);
            $this->session->set_flashdata('success', 'Save City.');
            redirect('City');
        }

    }
    public function delete($id=''){
        if($this->dbaction->delete('city','id',$id)){
            $this->session->set_flashdata('error', 'Delete Successfully.');
            redirect('City');
        }
    }

}
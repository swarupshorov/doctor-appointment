<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Deshboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
       
    }
    public function index(){
    	$this->load->view("header");
    	$this->load->view("left-bar");
    	$this->load->view("main_contain");
    	$this->load->view("footer");
    }
}
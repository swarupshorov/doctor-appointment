<?php
/**
 * Created by PhpStorm.
 * User: Swarup Mohan
 * Date: 9/13/2018
 * Time: 11:43 PM
 */


class MY_Control extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //========== load model ===============//
        $this->auth_check();
    }

    private function auth_check(){
        $id = $this->session->userdata('id');
        if(!$id){
            redirect('login');
        }
    }
}
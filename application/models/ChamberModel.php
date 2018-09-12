<?php
/**
 * Created by PhpStorm.
 * User: Swarup Mohan
 * Date: 9/12/2018
 * Time: 12:15 AM
 */

class ChamberModel extends CI_Model
{
    function __construct(){

    }
    public function getDoctor(){
        $sql = "select user.id,um.name from user  
                left join 
                  user_meta  as um on   um.user_id = user.id
                where 
                      user.type=2";
        $query = $this->db->query($sql);
        return $query->result_array();

    }
    public function getAllChamberInfo(){ 
      $sql = "select c.id,c.place,c.in_time,c.out_time,c.phone,c.email,um.name doc_name  
              from 
                chamber as c
              left join 
                user_meta as um 
              on 
                c.user_id =um.user_id";
        $query = $this->db->query($sql);
        return $query->result();
    }
}
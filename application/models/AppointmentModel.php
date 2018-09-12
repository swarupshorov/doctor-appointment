<?php
/**
 * Created by PhpStorm.
 * User: Swarup Mohan
 * Date: 9/13/2018
 * Time: 12:46 AM
 */

class AppointmentModel extends CI_Model
{
    public function getDoctor(){
        $sql = "select user.id,um.name from user  
                left join 
                  user_meta  as um on   um.user_id = user.id
                where 
                      user.type=2";
        $query = $this->db->query($sql);
        return $query->result_array();

    }
    public function getUser(){
        $sql = "select user.id,um.name from user  
                left join 
                  user_meta  as um on   um.user_id = user.id
                where 
                      user.type=1";
        $query = $this->db->query($sql);
        return $query->result_array();

    }
    public function Doctor($id){
        $sql = 'select id,user_id from category where id !='.$id;
        $query = $this->db->query($sql);
        return $query;
    }

}
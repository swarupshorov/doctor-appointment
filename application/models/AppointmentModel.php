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
    public function Chamber($id){
        $sql = 'select chamber.place,chamber.id from chamber 
                where chamber.city_id='.$id;
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function Doctor($id){

        $sql = 'select chamber.user_id doc_id,
            (select user_meta.name FROM user_meta where user_meta.user_id=chamber.user_id) doc_name 
            from chamber
            where chamber.place="'.$id.'"';
            
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function getAllAppointment(){
        $sql = 'select c.id as city_id,c.name as city_name,um.name as doctor,um2.name as patient,a.date,a.id,a.chamber_id
                    from appointment a 
                    left join city c on c.id = a.city_id
                    left join user_meta um on um.user_id = a.doctor_id
                    left join user_meta um2 on um2.user_id = a.patient_id';            
        $query = $this->db->query($sql);
        return $query->result();
    }

}
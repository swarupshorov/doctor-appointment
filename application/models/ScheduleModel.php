<?php
/**
 * Created by PhpStorm.
 * User: Swarup Mohan
 * Date: 9/12/2018
 * Time: 12:15 AM
 */

class ScheduleModel extends CI_Model
{
    function __construct(){

    }
    public function getAllScheduleInfo(){
      $sql = "select s.chamber_name,s.patient_view,s.id,s.status,s.date
              from 
                schedule as s 
              left join 
                chamber as c 
                  on s.chamber_name = c.place 
                order by s.date DESC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
   
}
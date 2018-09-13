<?php
/**
 * Created by PhpStorm.
 * User: Swarup Mohan
 * Date: 9/14/2018
 * Time: 2:34 AM
 */

class WelcomeModel extends CI_Model
{
    public function SaveData($values){
        if(!empty($values)){
            $this->db->trans_start();
            $this->db->set('user_name',$values['user_name']);
            $this->db->set('password',$values['password']);
            $this->db->set('email',$values['email']);
            $this->db->set('type',1);
            $this->db->insert('user');
            $this->db->set('user_id',$this->db->insert_id());
            $this->db->set('type',$values['name']);
            $this->db->set('name',$values['name']);
            $this->db->set('cell_no',$values['cell_no']);
            $this->db->set('type',1);
            $this->db->insert('user_meta');
            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                return false;
            }else{
                $this->db->trans_commit();
                return TRUE;
            }
        }else{
            return false;
        }
    }
    function fetch_data($query)
    {
        $this->db->select("*");
        $this->db->from("user");
        if($query != '')
        {
            $this->db->like('CustomerName', $query);
            $this->db->or_like('Address', $query);
            $this->db->or_like('City', $query);
            $this->db->or_like('PostalCode', $query);
            $this->db->or_like('Country', $query);
        }
        $this->db->order_by('CustomerID', 'DESC');
        return $this->db->get();
    }

}
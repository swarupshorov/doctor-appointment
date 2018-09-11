<?php
class DoctorModel extends CI_Model
{
	
	function __construct()
	{
		
	}

	public function SaveData($values){  
        if(!empty($values)){
            $this->db->trans_start();
            foreach($values as $key => $value){
                $this->db->set($key,$value);
            }
            $this->db->insert('user');
            $this->db->set('user_id',$this->db->insert_id());
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

    public function DeleteData($id){
        $this->db->trans_start();
        $this->db->where('id',$id);
        $this->db->delete('user');
        $this->db->where('user_id',$id);
        $this->db->delete('user_meta');
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return false;
        }else{
            $this->db->trans_commit();
            return TRUE;
        }

    }
}
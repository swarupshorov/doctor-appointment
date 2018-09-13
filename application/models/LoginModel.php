<?php 
/**
 * 
 */
class LoginModel extends CI_Model
{
	
	function __construct()
	{
		
	}

	public function validate($email,$password,$type){
        $where = '(email="'.$email.'" or user_name = "'.$email.'")';
        $query = $this->db->select('*')
                ->from('user')
                ->where($where)                
                ->get()
                ->row();        
        if($query){        	
            if($password==$query->password){
                $data = array(
                    'id' => $query->id,
                    'user_name' => $query->user_name,
                    'email' => $query->email,
                    'type' => $query->type,
                );
                $this->session->set_userdata($data);
                return true;
            }
        }        
        return false;
    }
}
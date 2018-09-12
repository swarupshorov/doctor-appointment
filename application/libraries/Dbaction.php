<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dbaction {
    private $CI;

    function __construct() {
        $this->CI =& get_instance();
        $this->CI->load->database();
    }
    //======================== Insert (start) =====================//
    /*table: database table name
     * values: form every value
     */
    public function insert($table,$values='')
    {
            
        if(!empty($values)){
            
            foreach($values as $key => $value){
                $this->CI->db->set($key,$value);
            }
            if($this->CI->db->insert($table)){
                return true;
            }
        }
        return false;
       
    }
    public function insertWithRetuen($table,$values='')
    {
            
        if(!empty($values)){
            foreach($values as $key => $value){
                $this->CI->db->set($key,$value);
            }
            $insert = $this->CI->db->insert($table);
            if($insert){
                return $insert_id = $this->CI->db->insert_id();
            }
        }
        return false;
       
    }
    //======================== Insert (End) =====================//

    //======================== Update/edit (start) =====================//
    /*
    * tableName : Give Table name Which table want  to update value
    * values : give values
    * deleteBy: Give Table Entity value for remove data
    * */
    public function update($table,$values,$entityName,$entityValue)
    {
        if(!empty($values)){
            foreach($values as $key => $value){
                $this->CI->db->set($key,$value);
            }
            $this->CI->db->where($entityName,$entityValue);
            $state = $this->CI->db->update($table);
            
            if($state){
                return true;
            }
        }
        return false;
    }
    //======================== Update/edit (End) =====================//

    //======================== Delete (start) =====================//
    /*
    * tableName : Give Table name Which want to remove value
    * deleteTo : Give Table Entity name for remove data
    * deleteBy: Give Table Entity value for remove data
    * */
    public function delete($tableName,$entityName,$entityValue)
    {
        $this->CI->db->where($entityName,$entityValue);
        if ($this->CI->db->delete($tableName)){
            return true;
        }//IF
        return false;
    }
    //======================== Delete (End) =====================//

    //======================== view (start) =====================//

    /*
     * tableName : Give Table name Which Table want to show data
     * orderBy : Give order by entity field name
     * orderType: give order view type (ASC/DESC)
     * */
    public function viewdata($tableName,$orderBy="",$orderType="DESC")
    {

        $this->CI->db->order_by($orderBy,$orderType);
        $query = $this->CI->db->get($tableName);
        return $query->result_object();
    }
     /*
     * tableName : Give Table name Which Table want to show data
     * entity : Give the Table entity for where condition
     * checkValue : Give the Table entity value for where condition
     * orderBy : Give order by entity field name
     * orderType: give order view type (ASC/DESC)
     * */
    public function viewDataWithWhere($tableName,$entity,$checkValue,$orderBy="",$orderType="DESC")
    {

        $this->CI->db->order_by($orderBy,$orderType);
        $this->CI->db->where($entity,$checkValue);
        $query = $this->CI->db->get($tableName);
        return $query->result_object();
    }
    //======================== view (End) =====================//
    //======================== Select (start) =====================//

    /*
     * tableName : Give Table name Which Table want to show data
     * orderBy : Give order by entity field name
     * orderType: give order view type (ASC/DESC)
     * */

    public function selectdata($tableName,$entity,$entityValue)
    {
        $query = "select * from `".$tableName."` where `".$entity."`='".$entityValue."'";
        $result = $this->CI->db->query($query);
        $data = $result->result();
        return $data;
    }
    //======================== Select (End) =====================//

    public function getDropDownData($tableName, $entity){
        $query = "SELECT `" . $entity . "` FROM `".$tableName."` ";
        $result = $this->CI->db->query($query);
        $data = $result->result();
        return $data;
    }
    //======================== GetList (start) =====================//

    /*
     * tableName : Give Table name Which Table want to show data
     * key : please give array key name for return data
     * value: please give array value name for return data
     * */
    public function getlist($tableName,$key,$value){
        $list = array();
        $query = "SELECT " .$key.','.$value." FROM ".$tableName;
        $result = $this->CI->db->query($query);
        $data = $result->result_array();
        if($data){
            foreach ($data as $item){
                $list[$item[$key]] =  $item[$value];
            }
        }
        return $list;
    }


}
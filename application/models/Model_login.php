<?php
 
class Model_login extends CI_Model{
    function cek_login($table,$where)
    {     
        $query=$this->db->get_where($table,$where);
        if($query->num_rows()==1){
            return $query->result();
        }else{
            return false;
        }
    }  
}
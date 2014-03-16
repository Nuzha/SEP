<?php

class Get_db extends CI_Model{
    
   /* function getAll(){
       $query = $this->db->query("SELECT * from test");        
       return $query->result() ;
    }   
    */
    function insert1($data){
        $this->db->insert("test", $data);
    }
    /*
    function insert2($data){
        $this->db->insert_batch("test", $data);
    }
    
    function update1($data){
         $this->db->update("test", $data, "id = 2");
    }
    */
}
?>

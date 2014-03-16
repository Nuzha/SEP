<?php
Class Model_users extends CI_Model
{
    public function can_log_in()
    {
      // $this -> db -> select('username, password');
       //$this -> db -> from('member');
       
        $this -> db -> where('username', $this->input->post('username'));
        $this -> db -> where('password', MD5($this->input->post('password')));
       // $this -> db -> limit(1);

        $query = $this -> db -> get('member');
   
        if($query -> num_rows() == 1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}

?>

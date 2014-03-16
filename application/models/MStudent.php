<?php 

class MStudent extends CI_Model{

  // Create student record in database
  function addStudent($data)
  {
    $this->db->insert('iteration', $data);
  }

  // Retrieve all student records
  function listStudents()
  {
    return $this->db->get('iteration');
  }
}

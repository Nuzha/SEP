<?php

/*if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Site extends CI_Controller {

    public function index() {
        
        $this->getValues();
        $this->insertValues();
        $this->updateValues();
        
        //login validation
        $this->load->view("login");
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        

        if ($this->form_validation->run() == FALSE) {
          //  $this->load->view('view_home');
        } else {
           // $this->load->view('view_home');
        }
        
    }

    function getValues() {
        $this->load->model("get_db");
        $data['results'] = $this->get_db->getAll();
        $this->load->view("view_db", $data);
    }

    function insertValues() {
        $this->load->model("get_db");
        $newRow = array(
            array(
                "name" => "sue"
            ),
            array(
                "name" => "Nuza"
            )
        );

        $this->get_db->insert2($newRow);
       
    }

    function updateValues() {
        $this->load->model("get_db");

        $newRow = array(
            "name" => "Yusra"
        );

        $this->get_db->update1($newRow);
        echo 'It has been updated';
    }

}*/

?>
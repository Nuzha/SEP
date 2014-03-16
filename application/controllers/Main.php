<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//Welcome renamed as Main - Fadila
//2nd
class Main extends CI_Controller {

	public function index()
	{
            $this->login();
     //         $this->add();
       //       $this->create();
	}
        
        public function login(){
            $this->load->view('view_login');
        }
        
        public function home(){
            $this->load->view('view_dashboard');
        }
        
        public function login_validation() {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean|call_validate_credentials');
            $this->form_validation->set_rules('password', 'Password', 'required|md5');

            if ($this->form_validation->run()) {
                redirect('main/home');
            } else {
                $this->load->view('view_login');
                
            }
         }
        
       public function validate_credentials(){
           $this->load->model('model_users');
     
           if($this->model_users-can_log_in()){
               return TRUE;
           }
           else {
               $this->form_validation->set_message('validate_credentials', 'Incorrect username/password');
               return FALSE;
           }
           
       }

    function add() {
        $this->load->helper('form');

        // display information for the view
        $data['title'] = "Classroom: Add Student";
        $data['headline'] = "Add a New Student";
        $data['include'] = 'itaretion';

        $this->load->view('view_home', $data);
    }

    function create() {
        $this->load->helper('url');

        $this->load->model('MStudent', '', TRUE);
        $this->MStudent->addStudent($_POST);
        redirect('main/add', 'refresh');
    }

}


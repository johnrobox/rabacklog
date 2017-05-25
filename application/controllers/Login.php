<?php

class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        // model load
        $this->load->model("user");
        
        // library bload
        $this->load->library('encryption');
        $this->load->library('alert');
    }
    
    public function index() {
        $this->load->view("main_site/default/header");
        $this->load->view("main_site/login/index");
        $this->load->view("main_site/default/footer");
    }
    
    public function loginExec() {
        
        // set input validation for login
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->index();
            
        } else {
            // sanitize post data
            $email = trim($this->input->post('email', TRUE));
            $password = trim($this->input->post('password', TRUE));
            
            // initialize fields to query
            $fields = array('user_firstname', 'user_lastname', 'user_password');
            $conditions = array('user_email' => $email);
            
            // start query
            $result = $this->user->getInfoByField($conditions, $fields);
            
            // check if query has data
            if ($result['valid'] == FALSE) {
                $this->session->set_flashdata('error', $this->alert->warningAlert('Incorrect email / password'));
                redirect(base_url().'index.php/Login');
                exit();
                
            } else {
                $data = $result['data'];
                
                $user_query_password;
              //  $result['data']
                echo "<pre>";
                print_r($result['data']);
            }
        }
    }
    
}
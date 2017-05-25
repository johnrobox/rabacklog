<?php

class Register extends CI_Controller {
    
    
    public function __construct() {
        parent::__construct();
        
        // model load
        $this->load->model("user");
        
        // library bload
        $this->load->library('encryption');
        $this->load->library('alert');
    }
    
    public function index(){
//$ciphertext = $this->encryption->encrypt($plain_text);
//echo $ciphertext;
//echo $this->encryption->decrypt($ciphertext);
        //die();
        $this->load->view("main_site/default/header");
        $this->load->view("main_site/registration/index");
        $this->load->view("main_site/default/footer");
    }
    
    public function registerExec() {
        $validate = array(
            array(
                'field' => 'firstname',
                'label' => 'Firstname',
                'rules' => 'required'
            ),
            array(
                'field' => 'lastname',
                'label' => 'Lastname',
                'rules' => 'required'
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|is_unique[users.user_email]|valid_email'
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|min_length[6]'
            ),
            array(
                'field' => 'password_conf',
                'label' => 'Repeat Password',
                'rules' => 'required|matches[password]'
            ),
            array(
                'field' => 'gender',
                'label' => 'Gender',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($validate);
        $this->form_validation->set_error_delimiters('<div class="text-error">', '</div>');
        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $firstname = trim($this->input->post('firstname'));
            $lastname = trim($this->input->post('lastname'));
            $email = trim($this->input->post('email'));
            $password = $this->input->post('password');
            $contact = trim($this->input->post('contact'));
            $gender = $this->input->post('gender');
            
            // encryp password
            $password_encryp = $this->encryption->encrypt($password);
            
            // get user IP address
            $client_ip_address = $this->input->ip_address();
            
            // get datetime
            date_default_timezone_set("Asia/Manila");
            $date_created = date('Y-m-d h:i:s');
            
            $data = array(
                'user_firstname' => $firstname,
                'user_lastname' => $lastname,
                'user_email' => $email,
                'user_password' => $password_encryp,
                'user_contact' => $contact,
                'user_gender' => $gender,
                'user_ip_address' => $client_ip_address,
                'user_date_created' => $date_created
            );

            $register = $this->user->insert($data);
            if ($register) {
                $this->session->set_flashdata('success', $this->alert->successAlert('Your Account was successfully created! Click <a href="'.base_url().'index.php/Login/"> HERE </a> to login'));
                redirect(base_url());
            } else {
                $this->session->set_flashdata('error', $this->alert->warningAlert('Cannot complete your registration! Please try register again!'));
                redirect(base_url().'index.php/RegisterController/');
            }
            
        }
        
    }
    
}
<?php

class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->view("main_site/default/header");
        $this->load->view("main_site/login/index");
        $this->load->view("main_site/default/footer");
    }
    
}
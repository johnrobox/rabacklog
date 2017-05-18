<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MainPage extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->view("main_site/default/header");
        $this->load->view("main_site/main_page/index");
        $this->load->view("main_site/default/footer");
    }
    
}
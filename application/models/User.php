<?php

class User extends CI_Model {
    
    private $table = "users";
    
    public function __construct() {
        parent::__construct();
    }
    
    public function insert($data) {
        $this->db->insert($this->table, $data);
        return ($this->db->affected_rows() != 0) ? true : false;
    }
    
}
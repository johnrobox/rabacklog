<?php

class User extends CI_Model {
    
    private $table = "users";
    
    public function __construct() {
        parent::__construct();
    }
    
    public function insert($data) {
        $this->db->insert($this->table, $data);
        return ($this->db->affected_rows() != 0) ? TRUE : FALSE;
    }
    
    public function getInfoByField($condition, $fields = "all") {
        if ($fields != 'all') {
            $this->db->select($fields);
        }
        $check = $this->db->get_where($this->table, $condition);
        if ($check->num_rows() > 0) {
            return array("valid" => TRUE, "data" => $check->row());
        } else {
            return array("valid" => FALSE);
        }
    }
    
}
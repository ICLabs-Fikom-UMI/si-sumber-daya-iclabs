<?php

class KepalaLab_model  {
    private $table = 'mst_kepala_lab';
    private $db;
    
    public function __construct() {
        $this->db = new Database;
    }

    public function getAllKepalaLab() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
}
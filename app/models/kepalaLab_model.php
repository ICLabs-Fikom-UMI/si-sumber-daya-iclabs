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

    public function getKepalaLabById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_kepala_lab = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}


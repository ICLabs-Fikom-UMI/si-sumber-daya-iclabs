<?php

class Laboran_model  {
    private $table = 'mst_laboran';
    private $db;
    
    public function __construct() {
        $this->db = new Database;
    }

    public function getAllLaboran() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getLaboranById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_laboran = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
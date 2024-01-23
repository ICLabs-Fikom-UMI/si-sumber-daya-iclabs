<?php

class Asisten_model
{
    private $table = 'mst_asisten';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllAsisten()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAsistenById($id) {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id_asisten = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}

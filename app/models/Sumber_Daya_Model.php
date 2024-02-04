<?php

class Sumber_Daya_Model
{
    private $table = 'trx_sumber_daya_lab';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSumberDayaKepalaLab()
    {
        $this->db->query('CALL GetSumberDayaKepalaLab()');

        return $this->db->resultSet();
    }
    public function getAllSumberDayaLaboran()
    {
        $this->db->query('CALL GetSumberDayaLaboran()');

        return $this->db->resultSet();
    }
    public function getAllSumberDayaAsisten()
    {
        $this->db->query('CALL GetSumberDayaAsisten()');

        return $this->db->resultSet();
    }

    

    public function getTotalSumberDaya()
    {
        $this->db->query('SELECT COUNT(*) as total_sumberDaya FROM trx_sumber_daya_lab');
        return $this->db->single();
    }

    public function getTotalKepalaLab()
    {
        $this->db->query('SELECT COUNT(*) as total_keplab FROM mst_kepala_Lab');
        return $this->db->single();
    }

    public function getTotalLaboran()
    {
        $this->db->query('SELECT COUNT(*) as total_laboran FROM mst_laboran');
        return $this->db->single();
    }

    public function getTotalAsisten()
    {
        $this->db->query('SELECT COUNT(*) as total_asisten FROM mst_asisten');
        return $this->db->single();
    }
}

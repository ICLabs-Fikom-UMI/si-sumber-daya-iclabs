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

    public function tambah_data_asisten($data) {
        $query = "INSERT INTO mst_asisten VALUES ('', :nama,  :kelas, '', '', :nim, :prodi, :angkatan, :email, :no_telp, :alamat, :deskripsi, :keahlian, :matkul)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama_lengkap']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('prodi', $data['prodi']);
        $this->db->bind('angkatan', $data['angkatan']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('no_telp', $data['no_telp']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('keahlian', $data['keahlian']);
        $this->db->bind('matkul', $data['matkul_praktikum']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}

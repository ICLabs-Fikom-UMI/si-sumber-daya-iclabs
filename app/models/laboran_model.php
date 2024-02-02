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

    public function checkIdUser($id)
    {
        $this->db->query('SELECT id_user FROM ' . $this->table . ' WHERE id_user = :id_user');
        $this->db->bind('id_user', $id);

        $result = $this->db->single();

        if ($result) {
            // Jika id_user ditemukan di database
            return true; // atau return $result['id_user'];
        } else {
            // Jika id_user tidak ditemukan di database
            return false;
        }
    }

    public function insertIduser($idUser)
    {
        $query = "INSERT INTO " . $this->table . " (id_user) VALUES (:id_user)";

        $this->db->query($query);
        $this->db->bind(':id_user', $idUser);
        $this->db->execute();
    }

    public function getDataLaboranByUserId($id)
    {
        $this->db->query("SELECT " . $this->table . ".*, mst_user.role FROM " . $this->table . " INNER JOIN mst_user ON " . $this->table . ".id_user = mst_user.id_user WHERE " . $this->table . ".id_user = :id");

        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function tambah_data_laboran($data)
    {
        $uploadDirectory = '../public/asset/image/foto-profile/';
        $uploadedFile = $_FILES['foto']['tmp_name'];
        $newFileName = $uploadDirectory . $_FILES['foto']['name'];

        move_uploaded_file($uploadedFile, $newFileName);
        
        try {
            $query = "UPDATE " . $this->table . " 
                  SET nama_laboran = :nama, 
                      foto = :foto, 
                      lulusan = :lulusan, 
                      mulai_menjabat = :mulai_menjabat, 
                      selesai_menjabat = :selesai_menjabat, 
                      email = :email, 
                      no_telp = :no_telp, 
                      deskripsi = :deskripsi, 
                      bidang_keahlian = :keahlian 
                  WHERE id_user = :id_user";

            $this->db->query($query);
            $this->db->bind('id_user', $data['id_user']);
            $this->db->bind('nama', $data['nama_laboran']);
            $this->db->bind('foto', $newFileName);
            $this->db->bind('lulusan', $data['lulusan']);
            $this->db->bind('mulai_menjabat', $data['mulai_menjabat']);
            $this->db->bind('selesai_menjabat', $data['selesai_menjabat']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('no_telp', $data['no_telp']);
            $this->db->bind('deskripsi', $data['deskripsi']);
            $this->db->bind('keahlian', $data['bidang_keahlian']);

            $this->db->execute();

            return $this->db->rowCount();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
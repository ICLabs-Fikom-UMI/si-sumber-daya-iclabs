<?php

class KepalaLab_model
{
    private $table = 'mst_kepala_lab';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKepalaLab()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
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

    public function getKepalaLabById($id)
    {

        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_kepala_lab = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getDataKepalaLabByUserId($id)
    {
        $this->db->query("SELECT " . $this->table . ".*, mst_user.role FROM " . $this->table . " INNER JOIN mst_user ON " . $this->table . ".id_user = mst_user.id_user WHERE " . $this->table . ".id_user = :id");

        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function tambah_data_kepLab($data)
    {
        $uploadDirectory = '../public/asset/image/foto-profile/';
        $uploadedFile = $_FILES['foto']['tmp_name'];
        $newFileName = $uploadDirectory . $_FILES['foto']['name'];

        move_uploaded_file($uploadedFile, $newFileName);

        try {
            $query = "UPDATE " . $this->table . " 
                  SET nama_kepala_lab = :nama, 
                      foto = :foto, 
                      nidn = :nidn, 
                      lulusan = :lulusan, 
                      dosen_prodi = :prodi, 
                      mulai_menjabat = :mulai_menjabat, 
                      selesai_menjabat = :selesai_menjabat,  
                      email = :email, 
                      no_telp = :no_telp, 
                      deskripsi = :deskripsi, 
                      bidang_keahlian = :keahlian 
                  WHERE id_user = :id_user";

            $this->db->query($query);
            $this->db->bind('id_user', $data['id_user']);
            $this->db->bind('nama', $data['nama_kepala_lab']);
            $this->db->bind('foto', $newFileName);
            $this->db->bind('nidn', $data['nidn']);
            $this->db->bind('lulusan', $data['lulusan']);
            $this->db->bind('prodi', $data['prodi']);
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

    public function insertIduser($idUser)
    {
        $query = "INSERT INTO " . $this->table . " (id_user) VALUES (:id_user)";

        $this->db->query($query);
        $this->db->bind(':id_user', $idUser);
        $this->db->execute();
    }

    public function getIdKepalaLabByIdUser($idKepalab)
    {
        $this->db->query('SELECT id_kepala_lab FROM ' . $this->table . ' WHERE id_user = :id');
        $this->db->bind('id', $idKepalab);
        return $this->db->single();
    }

    public function insertIdUserIntoTrxTable($id_user)
    {
        try {

            $this->db->query("INSERT INTO `trx_sumber_daya_lab` (`id_kepala_lab`) VALUES (:id_kepala_lab)");
            $this->db->bind(':id_kepala_lab', $id_user);

            return $this->db->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    
}

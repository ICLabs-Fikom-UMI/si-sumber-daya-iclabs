<?php

class Laboran_model
{
    private $table = 'mst_laboran';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllLaboran()
    {
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

    public function getIdLaboranByIdUser($idLaboran)
    {
        $this->db->query('SELECT id_laboran FROM ' . $this->table . ' WHERE id_user = :id');
        $this->db->bind('id', $idLaboran);
        return $this->db->single();
    }

    public function insertIdUserIntoTrxTable($id_user)
    {
        try {

            $this->db->query("INSERT INTO `trx_sumber_daya_lab` (`id_laboran`) VALUES (:id_laboran)");
            $this->db->bind(':id_laboran', $id_user);

            return $this->db->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function createDataLaboran($data)
    {
        $uploadDirectory = '../public/asset/image/foto-profile/';
        $uploadedFile = $_FILES['foto']['tmp_name'];
        $newFileName = $uploadDirectory . $_FILES['foto']['name'];

        move_uploaded_file($uploadedFile, $newFileName);

        $query = "CALL create_data_laboran(:nama, :foto, :lulusan, :mulai_menjabat, :selesai_menjabat, :email, :no_telp, :deskripsi, :bidang_keahlian)";

        $this->db->query($query);
        $this->db->bind('nama', $_POST['nama_laboran']);
        $this->db->bind('foto', $newFileName);
        $this->db->bind('lulusan', $_POST['lulusan']);
        $this->db->bind('mulai_menjabat', $_POST['mulai_menjabat']);
        $this->db->bind('selesai_menjabat', $_POST['selesai_menjabat']);
        $this->db->bind('email', $_POST['email']);
        $this->db->bind('no_telp', $_POST['no_telp']);
        $this->db->bind('deskripsi', $_POST['deskripsi']);
        $this->db->bind('bidang_keahlian', $_POST['bidang_keahlian']);

        return $this->db->execute();
    }

    public function update_detail_data_laboran($data)
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
                  WHERE id_laboran = :id_laboran";

            $this->db->query($query);
            $this->db->bind('id_laboran', $data['id_laboran']);
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

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

        return $result = $this->db->single();
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
                      bidang_kepala_lab = :bidang_kepala_lab, 
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
            $this->db->bind('bidang_kepala_lab', $data['bidang_kepala_lab']);
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

    public function createDataKepalaLab($data)
    {
        $uploadDirectory = '../public/asset/image/foto-profile/';
        $uploadedFile = $_FILES['foto']['tmp_name'];
        $newFileName = $uploadDirectory . $_FILES['foto']['name'];

        move_uploaded_file($uploadedFile, $newFileName);

        $query = "CALL create_data_kepala_lab(:id_user, :nama, :foto, :nidn, :bidang_kepala_lab, :prodi, :mulai_menjabat, :selesai_menjabat, :email, :no_telp, :deskripsi, :bidang_keahlian)";

        $this->db->query($query);

            $this->db->bind('id_user', $_POST['id_user']);
            $this->db->bind('nama', $_POST['nama_kepala_lab']);
            $this->db->bind('foto', $newFileName);
            $this->db->bind('nidn', $_POST['nidn']);
            $this->db->bind('bidang_kepala_lab', $_POST['bidang_kepala_lab']);
            $this->db->bind('prodi', $_POST['prodi']);
            $this->db->bind('mulai_menjabat', $_POST['mulai_menjabat']);
            $this->db->bind('selesai_menjabat', $_POST['selesai_menjabat']);
            $this->db->bind('email', $_POST['email']);
            $this->db->bind('no_telp', $_POST['no_telp']);
            $this->db->bind('deskripsi', $_POST['deskripsi']);
            $this->db->bind('bidang_keahlian', $_POST['bidang_keahlian']);

            $this->db->execute();
            return $this->db->rowCount();
    }
    
    public function update_detail_data_kepLab($data)
    {
        if (empty($_FILES['foto']['name'])) {
            try {
                $query = "UPDATE " . $this->table . " 
                      SET nama_kepala_lab = :nama, 
                          nidn = :nidn, 
                          bidang_kepala_lab = :bidang_kepala_lab, 
                          dosen_prodi = :prodi, 
                          mulai_menjabat = :mulai_menjabat, 
                          selesai_menjabat = :selesai_menjabat,  
                          email = :email, 
                          no_telp = :no_telp, 
                          deskripsi = :deskripsi, 
                          bidang_keahlian = :keahlian 
                      WHERE id_kepala_lab = :id_kepala_lab";

                $this->db->query($query);
                $this->db->bind('id_kepala_lab', $data['id_kepala_lab']);
                $this->db->bind('nama', $data['nama_kepala_lab']);
                $this->db->bind('nidn', $data['nidn']);
                $this->db->bind('bidang_kepala_lab', $data['bidang_kepala_lab']);
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
        } else {
            $uploadDirectory = '../public/asset/image/foto-profile/';
            $uploadedFile = $_FILES['foto']['tmp_name'];
            $newFileName = $uploadDirectory . $_FILES['foto']['name'];

            move_uploaded_file($uploadedFile, $newFileName);

            try {
                $query = "UPDATE " . $this->table . " 
                      SET nama_kepala_lab = :nama, 
                          foto = :foto,
                          nidn = :nidn, 
                          bidang_kepala_lab = :bidang_kepala_lab, 
                          dosen_prodi = :prodi, 
                          mulai_menjabat = :mulai_menjabat, 
                          selesai_menjabat = :selesai_menjabat,  
                          email = :email, 
                          no_telp = :no_telp, 
                          deskripsi = :deskripsi, 
                          bidang_keahlian = :keahlian 
                      WHERE id_kepala_lab = :id_kepala_lab";

                $this->db->query($query);
                $this->db->bind('id_kepala_lab', $_POST['id_kepala_lab']);
                $this->db->bind('nama', $_POST['nama_kepala_lab']);
                $this->db->bind('foto', $newFileName);
                $this->db->bind('nidn', $_POST['nidn']);
                $this->db->bind('bidang_kepala_lab', $_POST['bidang_kepala_lab']);
                $this->db->bind('prodi', $_POST['prodi']);
                $this->db->bind('mulai_menjabat', $_POST['mulai_menjabat']);
                $this->db->bind('selesai_menjabat', $_POST['selesai_menjabat']);
                $this->db->bind('email', $_POST['email']);
                $this->db->bind('no_telp', $_POST['no_telp']);
                $this->db->bind('deskripsi', $_POST['deskripsi']);
                $this->db->bind('keahlian', $_POST['bidang_keahlian']);

                $this->db->execute();

                return $this->db->rowCount();
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }

    public function update_foto_kepLab($data)
    {
        $uploadDirectory = '../public/asset/image/foto-profile/';
        $uploadedFile = $_FILES['foto']['tmp_name'];
        $newFileName = $uploadDirectory . $_FILES['foto']['name'];

        move_uploaded_file($uploadedFile, $newFileName);

        try {
            $query = "UPDATE " . $this->table . " SET foto = :foto WHERE id_kepala_lab = :id_kepala_lab";

            $this->db->query($query);
            $this->db->bind('id_kepala_lab', $data['id_kepala_lab']);
            $this->db->bind('foto', $newFileName);
            $this->db->execute();

            return $this->db->rowCount();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

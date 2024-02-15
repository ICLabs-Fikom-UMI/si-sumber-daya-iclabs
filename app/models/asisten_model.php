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

    public function getAsistenById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id_asisten = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getDataAsistenByUserId($id)
    {
        $this->db->query("SELECT " . $this->table . ".*, mst_user.role FROM " . $this->table . " INNER JOIN mst_user ON " . $this->table . ".id_user = mst_user.id_user WHERE " . $this->table . ".id_user = :id");

        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function tambah_data_asisten($data)
    {
        $uploadDirectory = '../public/asset/image/foto-profile/';
        $uploadedFile = $_FILES['foto']['tmp_name'];
        $newFileName = $uploadDirectory . $_FILES['foto']['name'];

        move_uploaded_file($uploadedFile, $newFileName);

        try {
            $query = "UPDATE " . $this->table . " 
          SET nama_asisten = :nama, 
              kelas = :kelas, 
              foto = :foto, 
              nim = :nim, 
              prodi = :prodi, 
              angkatan = :angkatan,  
              email = :email, 
              no_telp = :no_telp, 
              alamat = :alamat, 
              deskripsi = :deskripsi, 
              bidang_keahlian = :bidang_keahlian, 
              riwayat_matkul = :riwayat_matkul
          WHERE id_user = :id_user";


            $this->db->query($query);
            $this->db->bind('id_user', $data['id_user']);
            $this->db->bind('nama', $data['nama_asisten']);
            $this->db->bind('kelas', $data['kelas']);
            $this->db->bind('foto', $newFileName);
            $this->db->bind('nim', $data['nim']);
            $this->db->bind('prodi', $data['prodi']);
            $this->db->bind('angkatan', $data['angkatan']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('no_telp', $data['no_telp']);
            $this->db->bind('alamat', $data['alamat']);
            $this->db->bind('deskripsi', $data['deskripsi']);
            $this->db->bind('bidang_keahlian', $data['bidang_keahlian']);
            $this->db->bind('riwayat_matkul', $data['riwayat_matkul']);

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

    public function getIdAsistenByIdUser($id_user)
    {
        $this->db->query('SELECT id_asisten FROM ' . $this->table . ' WHERE id_user = :id');
        $this->db->bind(':id', $id_user);
        return $this->db->single();
    }

    public function insertIdUserIntoTrxTable($id_user)
    {
        try {
            $this->db->query("INSERT INTO `trx_sumber_daya_lab` (`id_asisten`) VALUES (:id_asisten)");
            $this->db->bind(':id_asisten', $id_user);

            return $this->db->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function createDataAsisten($data)
    {
        $uploadDirectory = '../public/asset/image/foto-profile/';
        $uploadedFile = $_FILES['foto']['tmp_name'];
        $newFileName = $uploadDirectory . $_FILES['foto']['name'];

        move_uploaded_file($uploadedFile, $newFileName);

        $query = "CALL create_data_asisten(:nama, :kelas, :foto, :nim, :prodi, :angkatan, :email, :no_telp, :alamat, :deskripsi, :bidang_keahlian, :matkul)";

        $this->db->query($query);
        $this->db->bind('nama', $_POST['nama_asisten']);
        $this->db->bind('kelas', $_POST['kelas']);
        $this->db->bind('foto', $newFileName);
        $this->db->bind('nim', $_POST['nim']);
        $this->db->bind('prodi', $_POST['prodi']);
        $this->db->bind('angkatan', $_POST['angkatan']);
        $this->db->bind('email', $_POST['email']);
        $this->db->bind('no_telp', $_POST['no_telp']);
        $this->db->bind('alamat', $_POST['alamat']);
        $this->db->bind('deskripsi', $_POST['deskripsi']);
        $this->db->bind('bidang_keahlian', $_POST['bidang_keahlian']);
        $this->db->bind('matkul', $_POST['riwayat_matkul']);

        return $this->db->execute();
    }

    public function update_detail_data_asisten($data)
    {
        $uploadDirectory = '../public/asset/image/foto-profile/';
        $uploadedFile = $_FILES['foto']['tmp_name'];
        $newFileName = $uploadDirectory . $_FILES['foto']['name'];

        move_uploaded_file($uploadedFile, $newFileName);

        try {
            $query = "UPDATE " . $this->table . " 
          SET nama_asisten = :nama, 
              kelas = :kelas, 
              nim = :nim, 
              prodi = :prodi, 
              angkatan = :angkatan,  
              email = :email, 
              no_telp = :no_telp, 
              alamat = :alamat, 
              deskripsi = :deskripsi, 
              bidang_keahlian = :bidang_keahlian, 
              riwayat_matkul = :riwayat_matkul
          WHERE id_asisten = :id_asisten";


            $this->db->query($query);
            $this->db->bind('id_asisten', $data['id_asisten']);
            $this->db->bind('nama', $data['nama_asisten']);
            $this->db->bind('kelas', $data['kelas']);
            $this->db->bind('nim', $data['nim']);
            $this->db->bind('prodi', $data['prodi']);
            $this->db->bind('angkatan', $data['angkatan']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('no_telp', $data['no_telp']);
            $this->db->bind('alamat', $data['alamat']);
            $this->db->bind('deskripsi', $data['deskripsi']);
            $this->db->bind('bidang_keahlian', $data['bidang_keahlian']);
            $this->db->bind('riwayat_matkul', $data['riwayat_matkul']);

            $this->db->execute();

            return $this->db->rowCount();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function update_foto_asisten($data)
    {
        $uploadDirectory = '../public/asset/image/foto-profile/';
        $uploadedFile = $_FILES['foto']['tmp_name'];
        $newFileName = $uploadDirectory . $_FILES['foto']['name'];

        move_uploaded_file($uploadedFile, $newFileName);

        try {
            $query = "UPDATE " . $this->table . " SET foto = :foto WHERE id_asisten = :id_asisten";

            $this->db->query($query);
            $this->db->bind('id_asisten', $data['id_asisten']);
            $this->db->bind('foto', $newFileName);
            $this->db->execute();

            return $this->db->rowCount();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

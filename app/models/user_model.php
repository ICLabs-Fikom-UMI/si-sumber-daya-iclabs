<?php
class User_model
{
    private $table_user = 'mst_user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function login($email, $password)
    {
        try {
            $query = 'SELECT * FROM ' . $this->table_user . ' WHERE email = :email';
            $this->db->query($query);
            $this->db->bind(':email', $email);

            $row = $this->db->single();

            if ($row) {
                if ($row['password'] == $password) {
                    return $row; // Login berhasil, kembalikan data user
                } else {
                    return false; // Password tidak cocok
                }
            } else {
                return false; // User tidak ditemukan
            }
        } catch (Exception $th) {
            echo $th;
        }
    }

    public function getRoleByEmail($email)
    {
        try {
            $query = 'SELECT role, id_user FROM ' . $this->table_user . ' WHERE email = :email';
            $this->db->query($query);
            $this->db->bind(':email', $email);

            $row = $this->db->single();

            if ($row) {
                return $row; // Kembalikan role user
            } else {
                return false; // User tidak ditemukan
            }
        } catch (Exception $e) {
            echo $e;
        }
    }

    public function getUserById($idUser)
    {
        $query = 'SELECT * FROM ' . $this->table_user . 'INNER JOIN  WHERE id_user = :id_user';
        $this->db->query($query);
        $this->db->bind(':id_user', $idUser);

        return $this->db->single();
    }

    // signup mulai
    public function registerUser($email, $password, $role)
    {
        // Simpan data user ke dalam database (lakukan query INSERT)
        $this->db->query('INSERT INTO ' . $this->table_user . '(email, password, role) VALUES (:email, :password, :role)');
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);
        $this->db->bind(':role', $role);

        return $this->db->execute();
    }

    public function buatKepLabOlehAdmin($email, $password, $role, $data)
    {

        $uploadDirectory = '../public/asset/image/foto-profile/';
        $uploadedFile = $_FILES['foto']['tmp_name'];
        $newFileName = $uploadDirectory . $_FILES['foto']['name'];

        move_uploaded_file($uploadedFile, $newFileName);

        $this->db->query('CALL create_data_kepala_lab_admin(:password, :role, :nama, :foto, :nidn, :bidang_kepala_lab, :prodi, :mulai_menjabat, :selesai_menjabat, :email, :no_telp, :deskripsi, :bidang_keahlian)');
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);
        $this->db->bind(':role', $role);
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


        return $this->db->execute();
    }

    public function buatAsistenOlehAdmin($email, $password, $role, $data)
    {
        try {
            $uploadDirectory = '../public/asset/image/foto-profile/';
            $uploadedFile = $_FILES['foto']['tmp_name'];
            $newFileName = $uploadDirectory . $_FILES['foto']['name'];

            move_uploaded_file($uploadedFile, $newFileName);

            $this->db->query('CALL create_data_asisten_admin(:password, :role, :nama, :kelas, :foto, :nim, :prodi, :angkatan, :email, :no_telp, :deskripsi, :bidang_keahlian, :matkul)');

            $this->db->bind(':email', $email);
            $this->db->bind(':password', $password);
            $this->db->bind(':role', $role);
            $this->db->bind(':nama', $_POST['nama_asisten']);  // Menggunakan :nama
            $this->db->bind(':kelas', $_POST['kelas']);
            $this->db->bind(':foto', $newFileName);
            $this->db->bind(':nim', $_POST['nim']);
            $this->db->bind(':prodi', $_POST['prodi']);
            $this->db->bind(':angkatan', $_POST['angkatan']);
            $this->db->bind(':email', $_POST['email']);
            $this->db->bind(':no_telp', $_POST['no_telp']);
            $this->db->bind(':deskripsi', $_POST['deskripsi']);
            $this->db->bind(':bidang_keahlian', $_POST['bidang_keahlian']);
            $this->db->bind(':matkul', $_POST['riwayat_matkul']);

            return $this->db->execute();
        } catch (Exception $e) {
            echo $e;
        }
    }

    public function buatLaboranOlehAdmin($email, $password, $role, $data)
    {
        try {
            $uploadDirectory = '../public/asset/image/foto-profile/';
            $uploadedFile = $_FILES['foto']['tmp_name'];
            $newFileName = $uploadDirectory . $_FILES['foto']['name'];

            move_uploaded_file($uploadedFile, $newFileName);

            $this->db->query('CALL create_data_laboran_admin(:password, :role, :nama, :foto, :lulusan, :mulai_menjabat, :selesai_menjabat, :email, :no_telp, :deskripsi, :bidang_keahlian)');

            $this->db->bind(':email', $email);
            $this->db->bind(':password', $password);
            $this->db->bind(':role', $role);
            $this->db->bind(':nama', $_POST['nama_laboran']);
            $this->db->bind(':foto', $newFileName);
            $this->db->bind(':lulusan', $_POST['lulusan']);
            $this->db->bind(':mulai_menjabat', $_POST['mulai_menjabat']);
            $this->db->bind(':selesai_menjabat', $_POST['selesai_menjabat']);
            $this->db->bind(':email', $_POST['email']);
            $this->db->bind(':no_telp', $_POST['no_telp']);
            $this->db->bind(':deskripsi', $_POST['deskripsi']);
            $this->db->bind(':bidang_keahlian', $_POST['bidang_keahlian']);

            $this->db->execute();
        } catch (Exception $e) {
            echo $e;
        }
    }


    public function cekKodeRegistrasi($kodeRegistrasi)
    {
        // Tentukan peran berdasarkan kode pendaftaran
        switch ($kodeRegistrasi) {
            case 'K84PLZDJ':
                return 'Kepala Lab';
            case 'HFYJ7SW4':
                return 'Laboran';
            case 'BS4GW6EG':
                return 'Asisten Lab';
            default:
                return false;
        }
    }
    // signup selesai

    public function ubah_pass_asisten($data)
    {
        try {
            $this->db->query("UPDATE " . $this->table_user . " SET password = :password WHERE id_user = :id_user");
            $this->db->bind(':password', $_POST['password']);
            $this->db->bind(':id_user', $_POST['id_user']);

            return $this->db->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function ubah_pass_kepala_lab($data)
    {
        try {
            $this->db->query("UPDATE " . $this->table_user . " SET password = :password WHERE id_user = :id_user");
            $this->db->bind(':password', $_POST['password']);
            $this->db->bind(':id_user', $_POST['id_user']);

            return $this->db->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function ubah_pass_laboran($data)
    {
        try {
            $this->db->query("UPDATE " . $this->table_user . " SET password = :password WHERE id_user = :id_user");
            $this->db->bind(':password', $_POST['password']);
            $this->db->bind(':id_user', $_POST['id_user']);

            return $this->db->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

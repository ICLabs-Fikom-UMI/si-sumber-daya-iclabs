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

}

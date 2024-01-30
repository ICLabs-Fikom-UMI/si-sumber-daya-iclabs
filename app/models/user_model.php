<?php
class User_model
{
    private $table = 'mst_user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function login($email, $password)
    {
        try {
            $query = 'SELECT * FROM ' . $this->table . ' WHERE email = :email';
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
            $query = 'SELECT role FROM ' . $this->table . ' WHERE email = :email';
            $this->db->query($query);
            $this->db->bind(':email', $email);

            $row = $this->db->single();

            if ($row) {
                return $row['role']; // Kembalikan role user
            } else {
                return false; // User tidak ditemukan
            }
        } catch (Exception $e) {
            echo $e;
        }
    }

    public function getUserById($idUser) {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE id_user = :id_user';
        $this->db->query($query);
        $this->db->bind(':id_user', $idUser);

        return $this->db->single();
    }
        //     public function getRoleByEmail($email){
        //         $query = 'SELECT role FROM ' . $this->table . ' WHERE email = :email';

        //         $this->db->query($query);
        //         $this->db->bind('email', $email);

        //         return $this->db->single();
        //     }

        //     public function validateLogin($email, $password)
        //     {
        //         $query = 'SELECT id_user, password FROM ' . $this->table . ' WHERE email = :email and password = password(:password)';

        //         $this->db->query($query);
        //         $this->db->bind('email', $email);
        //         $this->db->bind('password', $password);

        //         $result = $this->db->single();

        //         if ($result) {
        //             return $result['id_user'];
        //         } else {
        //             return false;
        //         }
        //     }

        //     public function getUser($email, $password)
        //     {
        //         // $this->db->query('SELECT * FROM' . $this->table . ''  WHERE email = :email AND password = :password");
        //         $this->db->bind('email', $email);
        //         $this->db->bind('password', $password);

        //         return $this->db->resultSet();
        //     }

        //     // signup mulai

        //     public function registerUser($email, $password, $registrationCode)
        //     {
        //         // Validasi kode pendaftaran dan tentukan peran
        //         $email = $_POST['email'];
        //         $password = $_POST['password'];
        //         $kodePendaftaran = $_POST['kode_pendaftaran'];

        //         $role = $this->validateRegistrationCode($registrationCode);

        //         // Simpan data user ke dalam database (lakukan query INSERT)
        //         $this->db->query('INSERT INTO ' . $this->table . '(email, password, role) VALUES (:email, :password, :role)"');
        //         $this->db->bind(':email', $email);
        //         $this->db->bind(':password', $password);
        //         $this->db->bind(':role', $kodePendaftaran);

        //         return $this->db->execute();
        //     }

        //     private function validateRegistrationCode($registrationCode)
        //     {
        //         // Tentukan peran berdasarkan kode pendaftaran
        //         switch ($registrationCode) {
        //             case 'K84PLZDJ':
        //                 return 'Kepala Lab';
        //             case 'HFYJ7SW4':
        //                 return 'Laboran';
        //             case 'BS4GW6EG':
        //                 return 'Asisten Lab';
        //         }
        //     }

        //     // signup selesai
}

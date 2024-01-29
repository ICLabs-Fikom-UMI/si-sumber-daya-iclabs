<?php
class User_model
{
    private $table = 'mst_user';
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getUser($email, $password)
    {
        // $this->db->query('SELECT * FROM' . $this->table . ''  WHERE email = :email AND password = :password");
        $this->db->bind('email', $email);
        $this->db->bind('password', $password);

        return $this->db->resultSet();
    }

    // signup mulai

    public function registerUser($email, $password, $registrationCode)
    {
        // Validasi kode pendaftaran dan tentukan peran
        $email = $_POST['email'];
        $password = $_POST['password'];
        $kodePendaftaran = $_POST['kode_pendaftaran'];

        $role = $this->validateRegistrationCode($registrationCode);

        // Simpan data user ke dalam database (lakukan query INSERT)
        $this->db->query('INSERT INTO ' . $this->table . '(email, password, role) VALUES (:email, :password, :role)"');
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);
        $this->db->bind(':role', $kodePendaftaran);

        return $this->db->execute();
    }

    private function validateRegistrationCode($registrationCode)
    {
        // Tentukan peran berdasarkan kode pendaftaran
        switch ($registrationCode) {
            case 'K84PLZDJ':
                return 'Kepala Lab';
            case 'HFYJ7SW4':
                return 'Laboran';
            case 'BS4GW6EG':
                return 'Asisten Lab';
        }
    }

    // signup selesai
}

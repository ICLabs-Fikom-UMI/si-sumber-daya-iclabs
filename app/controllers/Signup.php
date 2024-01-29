<?php

class Signup extends Controller
{
    public function index()
    {
        $data['judul'] = 'Signup';
        $this->view('templates/header_loginSignUp', $data);
        $this->view('templates/top_navbar_loginSignup');
        $this->view('signup/index', $data);
        $this->view('templates/footer');
    }

    public function register () {
        $userModel = $this->model('User_model');

        // Validasi input
        $email = $_POST['email'];
        $password = $_POST['password'];
        $registrationCode = $_POST['kode_pendaftaran']; // Tambahkan ini sesuai dengan field input di formulir

        // Hash password sebelum menyimpan ke database
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Register user dengan menentukan peran berdasarkan kode pendaftaran
        $userModel->registerUser($email, $hashedPassword, $registrationCode);

        // Redirect ke halaman login setelah registrasi berhasil
        echo 'berhasil';
    }
}

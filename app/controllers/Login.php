<?php

class Login extends Controller
{
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('templates/header_loginSignup', $data);
        $this->view('templates/top_navbar_loginSIgnup');
        $this->view('login/index', $data);
        $this->view('templates/footer');
    }

    public function login()
    {
        session_start();

        try {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $emailInput = $_POST['email']; // Normalisasi email input ke huruf kecil
                $password = $_POST['password'];

                $user = $this->model('User_model')->login($emailInput, $password);

                if ($user === false) {
                    header("Location: " . BASEURL . "/Login");
                    Flasher::setFlash('Akun Belum', 'Terdaftar', 'danger');
                    exit();
                } elseif ($user) {
                    $emailInDatabase = strtolower($user['email']); // Normalisasi email di database ke huruf kecil
                    $role = $this->model('User_model')->getRoleByEmail($emailInput);

                    // Pastikan email dari input pengguna dan email di database sesuai
                    if ($emailInput !== $emailInDatabase) {
                        header("Location: " . BASEURL . "/Login");
                        Flasher::setFlash('Akun Belum', 'Terdaftar', 'danger');
                        exit();
                    }

                    // Set session user
                    $_SESSION['role'] = $role['role'];
                    $_SESSION['id_user'] = $role['id_user'];

                    if ($role['role'] == 'Admin') {
                        header("Location: " . BASEURL . "/Dashboard");
                    } elseif ($role['role'] == 'Kepala Lab') {
                        header("Location: " . BASEURL . "/Profile_Keplab");
                    } elseif ($role['role'] == 'Laboran') {
                        header("Location: " . BASEURL . "/Profile_Laboran");
                    } elseif ($role['role'] == 'Asisten Lab') {
                        header("Location: " . BASEURL . "/Profile_Asisten");
                    }
                }
            }
        } catch (Exception $e) {
            echo $e;
        }
    }

}

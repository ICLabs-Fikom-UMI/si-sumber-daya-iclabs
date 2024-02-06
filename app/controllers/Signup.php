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

    public function signup()
    {
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $kodePendaftaran = $_POST['kode_pendaftaran'];

        $role = $this->model('User_model')->cekKodeRegistrasi($kodePendaftaran);

        if ($role == false) {
            header("Location: " . BASEURL . "/Signup");
            Flasher::setFlash('Kode Pendaftaran', 'Salah', 'danger');
            exit();
        } else {
            $this->model('User_model')->registerUser($email, $pass, $role);
            header("Location: " . BASEURL . "/Login");
            Flasher::setFlash('Berhasil Mendaftar,', 'Silahkan Login', 'success');
            exit();
        }
    }
}

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

        if ($role == false){
            header("Location: http://localhost:8080/tubesmvc/public/Signup");
        } else {
            $role = $this->model('User_model')->getRoleByEmail($email);

            

            $this->model('User_model')->registerUser($email, $pass, $role);
            header("Location: http://localhost:8080/tubesmvc/public/Login");
        }
    }
}

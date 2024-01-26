<?php
class Login extends Controller
{
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('templates/header_loginSignup');
        $this->view('templates/top_navbar_loginSIgnup');
        $this->view('login/index', $data);
        $this->view('templates/footer');
    }

    public function login()
    {
        // Ambil data dari form login
        $email = $_POST['email'];
        $password = $_POST['password'];

        $data['login'] = $this->model('user_model')->getUser($email, $password);
        var_dump($data['login']);

        
    }

}

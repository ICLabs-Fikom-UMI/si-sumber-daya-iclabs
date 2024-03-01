<?php

class Lupa_Pass extends Controller
{

    public function index()
    {
        $data['judul'] = 'Lupa Password';
        $this->view('templates/header_loginSignUp', $data);
        $this->view('templates/top_navbar_loginSignUp');
        $this->view('login/lupa_pass', $data);
        $this->view('templates/footer');
    }

    public function process()
    {
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $noAdmin = $_POST['nomor_admin'];
            header("Location:https://wa.me/$noAdmin?text=Assalamualaikum%2C%20saya%20lupa%20password%20akun%20saya%20di%20web%20Sumber%20Daya%20IcLabs.%20%0A%0AEmail%20%3A%20$email%0A%0ATerima%20Kasih");
        }
    }
}

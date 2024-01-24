<?php

class Login extends Controller {

    public function index() {
        $data['judul'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('templates/top_navbar_loginSIgnup');
        $this->view('login/index');
        $this->view('templates/footer');
    }
}
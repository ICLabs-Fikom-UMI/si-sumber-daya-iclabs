<?php

class Home extends Controller{
    public function index() {
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('templates/top_navbar');
        $this->view('home/index');
        $this->view('templates/footer');
    }
}
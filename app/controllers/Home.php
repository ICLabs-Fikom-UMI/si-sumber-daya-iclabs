<?php

class Home extends Controller{
    public function index() {
        $data['judul'] = 'Home';
        $data['kepalaLab'] = $this->model('kepalaLab_model')->getAllKepalaLab(); 
        $this->view('templates/header', $data);
        $this->view('templates/top_navbar');
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
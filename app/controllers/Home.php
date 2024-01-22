<?php

class Home extends Controller{
    public function index() {
        $data['judul'] = 'Home';
        $data['kepalaLab'] = $this->model('kepalaLab_model')->getAllKepalaLab(); 
        $data['laboran'] = $this->model('laboran_model')->getAllLaboran();
        $data['asisten'] = $this->model('asisten_model')->getAllAsisten();
        $this->view('templates/header', $data);
        $this->view('templates/top_navbar');
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
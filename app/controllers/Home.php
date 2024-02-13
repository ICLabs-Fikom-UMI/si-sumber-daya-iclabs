<?php

class Home extends Controller
{

    public function index()
    {
        $data['judul'] = 'Home';
        $data['kepalaLab'] = $this->model('kepalaLab_model')->getAllKepalaLab();
        $data['laboran'] = $this->model('laboran_model')->getAllLaboran();
        $data['asisten'] = $this->model('asisten_model')->getAllAsisten();
        $this->view('templates/header', $data);
        $this->view('templates/top_navbar_home');
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function detail_kepalaLab($id_kepala_lab)
    {
        $data['judul'] = 'Detail Sumber Daya';
        $data['kepala_lab'] = $this->model('kepalaLab_model')->getKepalaLabById($id_kepala_lab);
        $this->view('templates/header', $data);
        $this->view('templates/top_navbar_page');
        $this->view('home/detail_kepalaLab', $data);
        $this->view('templates/footer');
    }

    public function detail_laboran($id_laboran)
    {
        $data['judul'] = 'Detail Sumber Daya';
        $data['laboran'] = $this->model('laboran_model')->getLaboranById($id_laboran);
        // var_dump($data);
        $this->view('templates/header', $data);
        $this->view('templates/top_navbar_page');
        $this->view('home/detail_laboran', $data);
        $this->view('templates/footer');
    }

    public function detail_asisten($id_asisten)
    {
        // echo $id_asisten;
        $data['judul'] = 'Detail Sumber Daya';
        $data['asisten'] = $this->model('asisten_model')->getAsistenById($id_asisten);
        $this->view('templates/header', $data);
        $this->view('templates/top_navbar_page');
        $this->view('home/detail_asisten', $data);
        $this->view('templates/footer');
    }
}

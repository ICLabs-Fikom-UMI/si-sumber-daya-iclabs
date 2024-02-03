<?php

class Dashboard extends Controller
{
    public function index()
    {
        $data['judul'] = 'Dashboard';
        // $data['kepalaLab'] = $this->model('kepalaLab_model')->getAllKepalaLab();
        $this->view('templates/header', $data);
        $this->view('templates/top_navbar_home');
        $this->view('templates/sidebar');
        $this->view('admin/index', $data);
        $this->view('templates/footer_admin');
    }
}

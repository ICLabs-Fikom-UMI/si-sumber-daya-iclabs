<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'Lengkapi Profile';
        $data['asisten'] = $this->model('asisten_model')->getAllAsisten();
        $this->view('templates/header', $data);
        $this->view('templates/top_navbar_profile');
        $this->view('profile/kepLab/index');
        $this->view('templates/footer');
    }
}

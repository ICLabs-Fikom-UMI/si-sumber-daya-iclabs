<?php

class Lengkapi_ProfileKepLab extends Controller
{
    public function index()
    {
        $data['judul'] = 'Lengkapi Profile Kepala Lab';
        
        $this->view('templates/header', $data);
        $this->view('templates/top_navbar_profile');
        $this->view('profile/lengkapi_profile/keplab/index');
        $this->view('templates/footer');
    }
}

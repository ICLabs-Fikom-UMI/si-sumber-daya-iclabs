<?php

class Profile extends Controller
{
    public function index()
    {
        $data['judul'] = 'Lengkapi Profile Laboran';

        $this->view('templates/header', $data);
        $this->view('templates/top_navbar_profile');
        $this->view('profile/index');
        $this->view('templates/footer');
    }
}

<?php

class Profile_KepLab extends Controller
{
    public function index()
    {
        $data['judul'] = 'Lengkapi Profile Kepala Lab';
        $this->view('templates/header', $data);
        $this->view('templates/top_navbar_profile');
        $this->view('profile/lengkapi_profile/keplab/index' );
        $this->view('templates/footer');
    }

    public function detail_profile($id)
    {

        $data['judul'] = 'Profile Saya';
        $data['kepala_lab'] = $this->model('KepalaLab_model')->getDataKepalaLabByUserId($id);
        $this->view('templates/header', $data);
        $this->view('templates/top_navbar_profile');
        $this->view('profile/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        try {
            // $data['kepala_lab'] = $this->model('KepalaLab_model')->getDataKepalaLabByUserId($id);
            if ($this->model('KepalaLab_model')->tambah_data_kepLab($_POST) > 0) {
                
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

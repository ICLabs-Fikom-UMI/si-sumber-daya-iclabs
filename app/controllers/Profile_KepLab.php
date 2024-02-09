<?php

class Profile_KepLab extends Controller
{
    public function index()
    {
        session_start();
        if (!isset($_SESSION['id_user'])) {
            header("Location: " . BASEURL . "/Login");
            exit();
        }

        $data['judul'] = 'Lengkapi Profile Kepala Lab';
        $this->view('templates/header', $data);
        $this->view('templates/top_navbar_profile');
        $this->view('profile/lengkapi_profile/keplab/index');
        $this->view('templates/footer');
    }

    public function detail_profile($id)
    {
        session_start();
        if (!isset($_SESSION['id_user'])) {
            header("Location: " . BASEURL . "/Login");
            exit();
        }

        $data['judul'] = 'Profile Saya';
        $data['kepala_lab'] = $this->model('KepalaLab_model')->getDataKepalaLabByUserId($id);
        $this->view('templates/header', $data);
        $this->view('templates/top_navbar_profile');
        $this->view('profile/profile_saya/kepala_lab/index', $data);
        $this->view('templates/footer');
    }

    public function tambah($id_user)
    {
        try {
            $this->model('KepalaLab_model')->tambah_data_kepLab($_POST);
            header("Location: " . BASEURL . "/Profile_KepLab/detail_profile/" . $id_user);
        } catch (Exception $e) {
            echo  $e;
        }
    }
}

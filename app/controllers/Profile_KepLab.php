<?php

class Profile_KepLab extends Controller
{
    public function index()
    {
        session_start();
        if (!isset($_SESSION['id_user'])) {
            header("Location: http://localhost:8080/tubesmvc/public/Login");
            exit();
        }

        $data['judul'] = 'Lengkapi Profile Kepala Lab';
        $this->view('templates/header', $data);
        $this->view('templates/top_navbar_profile');
        $this->view('profile/lengkapi_profile/keplab/index' );
        $this->view('templates/footer');
    }

    public function detail_profile($id)
    {
        session_start();
        if (!isset($_SESSION['id_user'])) {
            header("Location: http://localhost:8080/tubesmvc/public/Login");
            exit();
        }

        $data['judul'] = 'Profile Saya';
        $data['kepala_lab'] = $this->model('KepalaLab_model')->getDataKepalaLabByUserId($id);
        $this->view('templates/header', $data);
        $this->view('templates/top_navbar_profile');
        $this->view('profile/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if (!isset($_SESSION['id_user'])) {
            header("Location: http://localhost:8080/tubesmvc/public/Login");
            exit();
        }

        try {
            $this->model('KepalaLab_model')->tambah_data_kepLab($_POST);
        } catch (Exception $e) {
            echo  $e;
        }
    }
}

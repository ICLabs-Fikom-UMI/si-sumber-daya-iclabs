<?php

class Profile_Laboran extends Controller
{
    public function index()
    {
        session_start();
        if (!isset($_SESSION['id_user'])) {
            header("Location: http://localhost:8080/tubesmvc/public/Login");
            exit();
        }
        $data['judul'] = 'Lengkapi Profile Laboran';

        $this->view('templates/header', $data);
        $this->view('templates/top_navbar_profile');
        $this->view('profile/lengkapi_profile/laboran/index');
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
        $data['laboran'] = $this->model('Laboran_model')->getDataLaboranByUserId($id);
        $this->view('templates/header', $data);
        $this->view('templates/top_navbar_profile');
        $this->view('profile/profile_saya/laboran/index', $data);
        $this->view('templates/footer');
    }

    public function tambah($id_user)
    {
        try {
            $this->model('Laboran_model')->tambah_data_laboran($_POST);
            // var_dump($id_user);
            header('Location: http://localhost:8080/tubesmvc/public/Profile_Laboran/detail_profile/' . $id_user);
        } catch (Exception $e) {
            echo  $e;
        }
    }
}

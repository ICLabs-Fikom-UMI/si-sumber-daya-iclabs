<?php

class Profile_Laboran extends Controller
{
    public function index()
    {
        session_start();
        if (!isset($_SESSION['id_user'])) {
            header("Location: " . BASEURL . "/Login");
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
            header("Location: " . BASEURL . "/Login");
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
            header("Location: " . BASEURL . "/Profile_Laboran/detail_profile/" . $id_user);
        } catch (Exception $e) {
            echo  $e;
        }
    }

    public function edit_foto_profile($data)
    {
        try {
            $this->model('Laboran_model')->update_foto_laboran($_POST);
            header("Location: " . BASEURL . "/Profile_Laboran/detail_profile/" . $data . "");
            Flasher::setFlash('Foto Anda Berhasil', 'Diubah', 'success');
            exit();
        } catch (Exception $e) {
            echo $e;
        }
    }
}

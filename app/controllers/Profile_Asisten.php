<?php

class Profile_Asisten extends Controller {

    public function index()
    {
        session_start();
        if (!isset($_SESSION['id_user'])) {
            header("Location: " . BASEURL . "/Login");
            exit();
        }

        $data['judul'] = 'Lengkapi Profile Asisten';

        $this->view('templates/header', $data);
        $this->view('templates/top_navbar_profile');
        $this->view('profile/lengkapi_profile/asisten/index', $data);
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
        $data['asisten'] = $this->model('Asisten_model')->getDataAsistenByUserId($id);
        $this->view('templates/header', $data);
        $this->view('templates/top_navbar_profile');
        $this->view('profile/profile_saya/asisten/index', $data);
        $this->view('templates/footer');
    }

    public function tambah($id_user)
    {
        session_start();

        // Pemeriksaan login
        if (!isset($_SESSION['id_user'])) {
            header("Location: " . BASEURL . "/Login");
            exit();
        }
        
        try {
            if ($this->model('Asisten_model')->tambah_data_asisten($_POST) > 0) {
                header("Location: " . BASEURL . "/Profile_Asisten/detail_profile/" . $id_user);
                exit();
            }
        } catch (Exception $e) {
            echo $e;
        }
    }

    public function edit_foto_profile($data)
    {
        try {
            $this->model('Asisten_model')->update_foto_asisten($_POST);
            header("Location: " . BASEURL . "/Profile_Asisten/detail_profile/" . $data . "");
            Flasher::setFlash('Foto Anda Berhasil', 'Diubah', 'success');
            exit();
        } catch (Exception $e) {
            echo $e;
        }
    }
}

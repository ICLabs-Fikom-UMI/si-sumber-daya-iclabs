<?php

class Profile_Asisten extends Controller {

    public function index()
    {
        session_start();
        if (!isset($_SESSION['id_user'])) {
            header("Location: http://localhost:8080/tubesmvc/public/Login");
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
            header("Location: http://localhost:8080/tubesmvc/public/Login");
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
            header("Location: http://localhost:8080/tubesmvc/public/Login");
            exit();
        }
        
        try {
            if ($this->model('Asisten_model')->tambah_data_asisten($_POST) > 0) {
                header("Location: http://localhost:8080/tubesmvc/public/Profile_Asisten/detail_profile/" . $id_user);
                exit;
            }
        } catch (Exception $e) {
            echo $e;
        }
    }
}

<?php

class Profile_Asisten extends Controller {

    public function index()
    {
        $data['judul'] = 'Lengkapi Profile Asisten';

        $this->view('templates/header', $data);
        $this->view('templates/top_navbar_profile');
        $this->view('profile/lengkapi_profile/asisten/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        try {
            if ($this->model('Asisten_model')->tambah_data_asisten($_POST) > 0) {
                header("Location: http://localhost:8080/tubesmvc/public/Profile/detail_profile");
                exit;
            }
        } catch (Exception $e) {
            echo $e;
        }
    }
    public function detail_profile()
    {
        $data['judul'] = 'Profile Saya';

        $this->view('templates/header', $data);
        $this->view('templates/top_navbar_profile');
        $this->view('profile/index');
        $this->view('templates/footer');
    }
}

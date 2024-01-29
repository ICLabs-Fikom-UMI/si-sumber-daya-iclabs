<?php

class Lengkapi_ProfileAsisten extends Controller
{
    public function index()
    {
        $data['judul'] = 'Lengkapi Profile Asisten';
        
        $this->view('templates/header', $data);
        $this->view('templates/top_navbar_profile');
        $this->view('profile/lengkapi_profile/asisten/index', $data);
        $this->view('templates/footer');
    }

    public function tambah() {
        try {
            if ($this->model('Asisten_model')->tambah_data_asisten($_POST) > 0) {
                header("Location: http://localhost:8080/tubesmvc/public/Profile");
                exit;
            }
        }catch(Exception $e) {
            echo $e;
        }
    }
}

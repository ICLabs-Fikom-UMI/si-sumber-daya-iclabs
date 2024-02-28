<?php

class Profile_Asisten extends Controller {

    public function index()
    {
        session_start();
        if (!isset($_SESSION['id_user'])) {
            header("Location: " . BASEURL . "/Login");
            exit();
        }

        $id_user = $_SESSION['id_user'];
        $dataProfilAsisten = $this->model('Asisten_model')->getDataAsistenByUserId($id_user);

        if ($dataProfilAsisten&& $_SESSION['role'] != 'Admin') {
            // Jika data profil asisten sudah ada, arahkan ke header lain
            header("Location: " . BASEURL . "/Profile_Asisten/detail_profile/" . $id_user);
            exit();
        }

        if ($_SESSION['role'] == 'Admin') {
            $data['judul'] = 'Edit Profile Asisten';
            $this->view('templates/header_admin', $data);
            $this->view('templates/top_navbar_admin');
            $this->view('profile/lengkapi_profile/asisten/index');
            $this->view('templates/footer_admin');
        } else {
            $data['judul'] = 'Lengkapi Profile Asisten';
            $this->view('templates/header', $data);
            $this->view('templates/top_navbar_profile');
            $this->view('profile/lengkapi_profile/asisten/index');
            $this->view('templates/footer');
        }
    }

    public function detail_profile($id)
    {
        session_start();
        if (!isset($_SESSION['id_user'])) {
            header("Location: " . BASEURL . "/Login");
            exit();
        }

        if ($_SESSION['role'] == 'Admin') {
            $data['judul'] = 'Edit Profile Asisten';
            $data['asisten'] = $this->model('Asisten_model')->getDataAsistenByUserId($id);
            $this->view('templates/header_admin', $data);
            $this->view('templates/top_navbar_admin');
            $this->view('profile/profile_saya/asisten/index', $data);
            $this->view('templates/footer_admin');
        } else {
            $data['judul'] = 'Profile Saya';
            $data['asisten'] = $this->model('Asisten_model')->getDataAsistenByUserId($id);
            $this->view('templates/header', $data);
            $this->view('templates/top_navbar_profile');
            $this->view('profile/profile_saya/asisten/index', $data);
            $this->view('templates/footer');
        }
        
    }

    public function tambah($id_user = '')
    {
        session_start();

        // Pemeriksaan login
        if (!isset($_SESSION['id_user'])) {
            header("Location: " . BASEURL . "/Login");
            exit();
        }
        
        try {
            if (($_SESSION['role'] === 'Admin')) {
                $this->model('User_model')->buatAsistenOlehAdmin($_POST['email'], '#iclabs21', $_POST['role'], $_POST);
                header("Location: " . BASEURL . "/Dashboard/data_asisten");
                exit();
            } else {
                if ($this->model('Asisten_model')->createDataAsisten($_POST) > 0) {
                    header("Location: " . BASEURL . "/Profile_Asisten/detail_profile/" . $id_user);
                    exit();
                }
            }
        } catch (Exception $e) {
            echo $e;
        }
    }

    public function edit_profile($data)
    {
        try {
            $this->model('Asisten_model')->update_detail_data_asisten($_POST);
            header("Location: " . BASEURL . "/Profile_Asisten/detail_profile/" . $data . "");
            Flasher::setFlash('Profile Anda Berhasil', 'Diubah', 'success');
            exit();
        } catch (Exception $e) {
            echo $e;
        }
    }

    public function ubah_password($id)
    {
        
        try {
            $data['judul'] = 'Ubah Password';
            $data['id_user'] = $this->model('Asisten_model')->checkIdUser($id);

            if ($_SESSION['role'] == 'Admin') {
                $this->view('templates/header_admin');
            } else {
                $this->view('templates/header', $data);
            }

            if ($_SESSION['role'] == 'Admin') {
                $this->view('templates/top_navbar_admin');
            } else {
                $this->view('templates/top_navbar_home');
            }

            $this->view('profile/profile_saya/asisten/ubah_password', $data);

            if ($_SESSION['role'] == 'Admin') {
                $this->view('templates/footer_admin', $data);
            } else {
                $this->view('templates/footer');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function process_password($data)
    {
        try {
            $this->model('User_model')->ubah_pass_asisten($_POST);
            header("Location: " . BASEURL . "/Profile_Asisten/detail_profile/" . $data . "");
            Flasher::setFlash('Password Anda Berhasil', 'Diubah', 'success');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
    }
}

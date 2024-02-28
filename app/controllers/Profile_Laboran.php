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

        $id_user = $_SESSION['id_user'];
        $dataProfilLaboran = $this->model('Laboran_model')->getDataLaboranByUserId($id_user);

        if ($dataProfilLaboran && $_SESSION['role'] != 'Admin') {
            // Jika data profil kepala lab sudah ada, arahkan ke header lain
            header("Location: " . BASEURL . "/Profile_Laboran/detail_profile/" . $id_user);
            exit();
        }

        if ($_SESSION['role' == 'Admin']) {
            $data['judul'] = 'Edit Profile Laboran';
            $this->view('templates/header_admin', $data);
            $this->view('templates/top_navbar_admin');
            $this->view('profile/lengkapi_profile/laboran/index');
            $this->view('templates/footer_admin');
        } else {
            $data['judul'] = 'Lengkapi Profile Laboran';
            $this->view('templates/header', $data);
            $this->view('templates/top_navbar_profile');
            $this->view('profile/lengkapi_profile/laboran/index');
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
            $data['judul'] = 'Edit Profile Laboran';
            $data['laboran'] = $this->model('Laboran_model')->getDataLaboranByUserId($id);
            $this->view('templates/header_admin', $data);
            $this->view('templates/top_navbar_admin');
            $this->view('profile/profile_saya/laboran/index', $data);
            $this->view('templates/footer_admin');
        } else {
            $data['judul'] = 'Profile Saya';
            $data['laboran'] = $this->model('Laboran_model')->getDataLaboranByUserId($id);
            $this->view('templates/header', $data);
            $this->view('templates/top_navbar_profile');
            $this->view('profile/profile_saya/laboran/index', $data);
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
                $this->model('User_model')->buatLaboranOlehAdmin($_POST['email'], '#iclabs21', $_POST['role'], $_POST);
                header("Location: " . BASEURL . "/Dashboard/data_laboran");
                exit();
                //success
            } else {

                if ($this->model('Laboran_model')->createDataLaboran($_POST) > 0) {
                    header("Location: " . BASEURL . "/Profile_Laboran/detail_profile/" . $id_user);
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
            $this->model('Laboran_model')->update_detail_data_laboran($_POST);
            header("Location: " . BASEURL . "/Profile_Laboran/detail_profile/" . $data . "");
            Flasher::setFlash('Foto Anda Berhasil', 'Diubah', 'success');
            exit();
        } catch (Exception $e) {
            echo $e;
        }
    }

    public function ubah_password($id)
    {

        try {
            $data['judul'] = 'Ubah Password';
            $data['id_user'] = $this->model('Laboran_model')->checkIdUser($id);

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

            $this->view('profile/profile_saya/laboran/ubah_password', $data);

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
            $this->model('User_model')->ubah_pass_laboran($_POST);
            header("Location: " . BASEURL . "/Profile_Laboran/detail_profile/" . $data . "");
            Flasher::setFlash('Password Anda Berhasil', 'Diubah', 'success');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
